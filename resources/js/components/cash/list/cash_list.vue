<template>
    <div id="pageBody" class="container-fluid">

        <div style="margin: 10px;text-align: right;">
            <select class="form-control" onchange="page_reload(this);">
                <option value="2020-04" selected="selected">2020-04</option>
            </select>

            <a id="list_link" href="">登録ページ</a>
        </div>
        
        <cash_list_total_component></cash_list_total_component>

        <hr style="height: 10px;"></hr>
        
        <cash_list_sum_kamoku_component></cash_list_sum_kamoku_component>

        <hr style="height: 10px;"></hr>

        <cash_list_detail_component></cash_list_detail_component>
    </div>

</template>

<style>
</style>

<scritp type="text/javascript">
    import cash_list_detail from "./cash_list_detail";
    import cash_list_sum_kamoku from "./cash_list_sum_kamoku";
    import cash_list_total from "./cash_list_total";
    

    Vue.component('cash_list_detail_component', cash_list_detail);
    Vue.component('cash_list_sum_kamoku_component', cash_list_sum_kamoku);
    Vue.component('cash_list_total_component', cash_list_total);
</scritp>