<?php

namespace Adrenth\Redirect\Updates;

use Illuminate\Database\Schema\Blueprint;
use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * Class RemovePublishStatusColumnRedirectsTable
 *
 * @package Adrenth\Redirect\Updates
 */
class RemovePublishStatusColumnRedirectsTable extends Migration
{
    const TABLE = 'adrenth_redirect_redirects';

    public function up()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->dropColumn('publish_status');
        });
    }

    public function down()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->boolean('publish_status')->default(false);
        });
    }
}
