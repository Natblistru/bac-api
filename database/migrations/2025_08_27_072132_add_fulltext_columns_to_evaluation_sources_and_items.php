<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        $db = DB::getDatabaseName();

        // --- evaluation_sources ---
        // 1) drop index dacă există
        if ($this->indexExists($db, 'evaluation_sources', 'ft_content_text')) {
            DB::statement("DROP INDEX `ft_content_text` ON `evaluation_sources`");
        }
        // 2) drop column dacă există
        if (Schema::hasColumn('evaluation_sources', 'content_text')) {
            DB::statement("ALTER TABLE `evaluation_sources` DROP COLUMN `content_text`");
        }
        // 3) add generated column (curăță HTML din JSON)
        DB::statement("
            ALTER TABLE `evaluation_sources`
            ADD COLUMN `content_text` TEXT
            GENERATED ALWAYS AS (
              TRIM(
                REGEXP_REPLACE(
                  IFNULL(JSON_UNQUOTE(JSON_EXTRACT(`content`, '$.html')), ''),
                  '<[^>]*>',
                  ' '
                )
              )
            ) PERSISTENT
        ");
        // 4) fulltext index
        DB::statement("CREATE FULLTEXT INDEX `ft_content_text` ON `evaluation_sources` (`content_text`)");

        // --- evaluation_items ---
        if ($this->indexExists($db, 'evaluation_items', 'ft_task_text')) {
            DB::statement("DROP INDEX `ft_task_text` ON `evaluation_items`");
        }
        if (Schema::hasColumn('evaluation_items', 'task_text')) {
            DB::statement("ALTER TABLE `evaluation_items` DROP COLUMN `task_text`");
        }
        DB::statement("
            ALTER TABLE `evaluation_items`
            ADD COLUMN `task_text` TEXT
            GENERATED ALWAYS AS (
              TRIM(
                REGEXP_REPLACE(
                  IFNULL(JSON_UNQUOTE(JSON_EXTRACT(`task`, '$.html')), ''),
                  '<[^>]*>',
                  ' '
                )
              )
            ) PERSISTENT
        ");
        DB::statement("CREATE FULLTEXT INDEX `ft_task_text` ON `evaluation_items` (`task_text`)");
    }

    public function down(): void
    {
        if ($this->indexExists(DB::getDatabaseName(), 'evaluation_items', 'ft_task_text')) {
            DB::statement("DROP INDEX `ft_task_text` ON `evaluation_items`");
        }
        if (Schema::hasColumn('evaluation_items', 'task_text')) {
            DB::statement("ALTER TABLE `evaluation_items` DROP COLUMN `task_text`");
        }

        if ($this->indexExists(DB::getDatabaseName(), 'evaluation_sources', 'ft_content_text')) {
            DB::statement("DROP INDEX `ft_content_text` ON `evaluation_sources`");
        }
        if (Schema::hasColumn('evaluation_sources', 'content_text')) {
            DB::statement("ALTER TABLE `evaluation_sources` DROP COLUMN `content_text`");
        }
    }

    private function indexExists(string $schema, string $table, string $index): bool
    {
        $sql = "
          SELECT 1
          FROM information_schema.statistics
          WHERE table_schema = ? AND table_name = ? AND index_name = ?
          LIMIT 1
        ";
        return (bool) DB::selectOne($sql, [$schema, $table, $index]);
    }
};
