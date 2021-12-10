<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Settings;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('label');
            $table->string('group');
            $table->string('type');
            $table->bigInteger('sort');
            $table->text('value');
        });

        $sort = 0;

        Settings::create([
            'name' => 'contacts_phone',
            'group' => 'Контакты',
            'label' => 'Телефон',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => '8 800 900 20 20'
        ]);

        Settings::create([
            'name' => 'contacts_email',
            'group' => 'Контакты',
            'label' => 'Email',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'dev@admin.ru'
        ]);

        Settings::create([
            'name' => 'contacts_address',
            'group' => 'Контакты',
            'label' => 'Адрес',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'New York'
        ]);

        Settings::create([
            'name' => 'email_to',
            'label' => 'Email для уведомлений',
            'group' => 'Почта',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'dev@admin.ru',
        ]);

        Settings::create([
            'name' => 'smtp_from',
            'label' => 'Имя отправителя',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'Develop Mailer',
        ]);

        Settings::create([
            'name' => 'smtp_email',
            'label' => 'Email отправителя',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'dev@admin.ru',
        ]);

        Settings::create([
            'name' => 'smtp_login',
            'label' => 'Логин',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'dev@admin.ru',
        ]);

        Settings::create([
            'name' => 'smtp_password',
            'label' => 'Пароль',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'tsvmXbCTaPeXfA3',
        ]);

        Settings::create([
            'name' => 'smtp_host',
            'label' => 'Host',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'smtp.yandex.ru',
        ]);

        Settings::create([
            'name' => 'smtp_port',
            'label' => 'Port',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => '465',
        ]);

        Settings::create([
            'name' => 'smtp_encryption',
            'label' => 'Шифрование',
            'group' => 'SMTP',
            'type' => 'input',
            'sort' => ++$sort,
            'value' => 'ssl',
        ]);

        Settings::create([
            'name' => 'code_head',
            'label' => 'Head',
            'group' => 'Код',
            'type' => 'textarea',
            'sort' => ++$sort,
            'value' => '<script>console.log("code head from settings")</script>',
        ]);

        Settings::create([
            'name' => 'code_body',
            'label' => 'Body',
            'group' => 'Код',
            'type' => 'textarea',
            'sort' => ++$sort,
            'value' => '<script>console.log("code body from settings")</script>',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
