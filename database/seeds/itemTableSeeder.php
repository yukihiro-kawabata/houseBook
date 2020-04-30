<?php

use Illuminate\Database\Seeder;

class itemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "";
        $sql .= " INSERT INTO `item` (`id`, `api_name`, `explain`, `method`, `db_name`, `db_table`, `db_table_col`, `created_user`, `required1`, `required2`, `required3`, `required4`, `required5`, `required6`, `required7`, `required8`, `required9`, `required10`, `required_text1`, `required_text2`, `required_text3`, `required_text4`, `required_text5`, `required_text6`, `required_text7`, `required_text8`, `required_text9`, `required_text10`, `param1`, `param2`, `param3`, `param4`, `param5`, `param6`, `param7`, `param8`, `param9`, `param10`, `param11`, `param12`, `param13`, `param14`, `param15`, `param16`, `param17`, `param18`, `param19`, `param20`, `param21`, `param22`, `param23`, `param24`, `param25`, `param26`, `param27`, `param28`, `param29`, `param30`, `param_text1`, `param_text2`, `param_text3`, `param_text4`, `param_text5`, `param_text6`, `param_text7`, `param_text8`, `param_text9`, `param_text10`, `param_text11`, `param_text12`, `param_text13`, `param_text14`, `param_text15`, `param_text16`, `param_text17`, `param_text18`, `param_text19`, `param_text20`, `param_text21`, `param_text22`, `param_text23`, `param_text24`, `param_text25`, `param_text26`, `param_text27`, `param_text28`, `param_text29`, `param_text30`, `group_by1`, `group_by2`, `group_by3`, `group_by4`, `group_by5`, `group_by6`, `group_by7`, `group_by8`, `group_by9`, `group_by10`, `created_at`, `updated_at`) VALUES ";
        $sql .= " (1, 'cash_tb_groupby_date', 'cashテーブルに格納されている日付からGROUP BYをして年月だけを引っこ抜く', 'GET', 'mysql', 'cash', 'DISTINCT\r\nDATE_FORMAT(`date`, \'%Y%m\') AS date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DATE_FORMAT(`date`, \'%Y%m\')', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-29 07:52:31', '2020-04-29 08:37:18'), ";
        $sql .= " (2, 'cash_tb_all_date', 'cashテーブルからデータを取り出す', 'GET', 'mysql', 'cash', '*', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ex). date=2020-03%\r\n対象日付', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-29 11:56:27', '2020-04-29 11:56:27'), ";
        $sql .= " (3, 'cash_tb_price_groupby_name', '人ごとの収支を取得する', 'GET', 'mysql', 'cash', 'name,\r\nSUM(\r\n    case priceFlg\r\n        WHEN 1 THEN price\r\n        WHEN 2 THEN price * -1\r\n    END\r\n) AS amont', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'date', 'name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ex). date=2020-03%\r\n対象日付', 'ex). name=devit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-30 01:26:19', '2020-04-30 01:38:20'); ";
        DB::statement($sql);
    }
}
