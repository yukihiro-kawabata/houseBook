<template>
    <div id="pageBody" class="container-fluid">

        <div style="margin: 10px;text-align: right;">
            <select id="pull_down_date" class="form-control">
                <option v-for="item in yearMonth" :key="item.date">{{ item.date }}</option>
            </select>

            <a id="list_link" href="">登録ページ</a>
        
        <totalComponent></totalComponent>
        </div>

        <hr style="height: 10px;"></hr>
        
        <sumKamokuComponent></sumKamokuComponent>

        <hr style="height: 10px;"></hr>

        <detailComponent></detailComponent>
    </div>

</template>

<style>
</style>

<script>

    import totalComponent from "./cashListTotalComponent";
    import sumKamokuComponent from "./cashListSumKamokuComponent";
    import detailComponent from "./cashListDetailComponent";
    
    export default{
        components: {
            totalComponent,
            sumKamokuComponent,
            detailComponent
        },
        data() {
            return {
                yearMonth: [
                    {date: '2020-03'},
                    {date: '2020-04'},
                    {date: '2020-05'},
                ]
            }
        }
    }

</script>