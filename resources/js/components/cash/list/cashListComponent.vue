<template>
    <div id="pageBody" class="container-fluid">

        <div style="margin: 10px;text-align: right;">
            <select id="pull_down_date" class="form-control">
                <option v-for="item in month" :key="item.date">{{ item.date }}</option>
            </select>

            <a id="list_link" href="">登録ページ</a>
        
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-success">残高<span class="badge badge-success float-right">まだやねん</span></li>
                <li class="list-group-item list-group-item-success">Devit 使用額<span class="badge badge-success float-right">{{ devit_total.amont }}</span></li>
                <li class="list-group-item list-group-item-danger">今月支出<span class="badge badge-danger float-right">まだやねん</span></li>
                <li class="list-group-item list-group-item-primary">今月利益<span class="badge badge-primary float-right">まだやねん</span></li>
            </ul>
        </div>

        <hr style="height: 10px;"></hr>
        
        <ul class="nav nav-tabs" style="font-size: 12px;">
            <li class="nav-item">
                <a id="nav-link-ALL" class="nav-link" href="javascript:void(0)" onclick="alert()">ALL</a>
            </li>
        </ul>

        <ul id="sum_kamoku_list_share" class="list-group list-group-flush">
            <li class="list-group-item">
                家賃
                <span class="badge badge-danger float-right">112,000</span>    
            </li>
        </ul>


        <hr style="height: 10px;"></hr>

        <div class="table-responsive">
            <table class="table table-sm table-hover" style="font-size: 11px;min-width: 680px;">
                <thead>
                    <tr>
                        <th scope="col" style="width: 75px;">名前</th>
                        <th scope="col" style="width: 50px;">金額</th>
                        <th scope="col" style="width: 95px;">科目</th>
                        <th scope="col">概要</th>
                        <th scope="col" style="width: 80px;">発生日</th>
                        <th scope="col" style="width: 80px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in detail" v-bind:key="item.id">
                        <td><span class="circle devit"></span>{{ item.name }}</td>
                        <td>{{ item.price }}</td>
                        <td>{{ item.tag }}</td>
                        <td>{{ item.comment }}</td>
                        <td>{{ item.date }}</td>
                        <td class="text-center"><button type="button" class="button_cumstom" onclick="alert();">削除</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<style>
    .circle {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: block;
        float: left;
        margin: 3px;
    }
    .kabigon {
        background-color: #997C3D;
    }
    .yukihiro {
        background-color: #14CC7B;
    }
    .devit {
        background-color: #FF6F00;
    }
    .share {
        background-color: #007bff;
    }
    .button_cumstom {
        background-color: #c82333;
        color: #fff;
        border-radius: 15%;
        border: none;
    }
    .display_off {
        display: none;
    }
</style>

<script>
    export default {
        props: {
            date: String
        },
        data: function() {
            return {
                month: {},
                detail: {},
                devit_total: {}
            }
        },
        methods: {
            getYearMonth() {
                axios.get('/api?action=cash_tb_groupby_date')
                    .then((res) => {
                        this.month = res.data;
                    });
            },
            fetchDetail() {
                axios.get('/api?action=cash_tb_all_date&db_name=mysql&date=2020-03%')
                    .then((res) => {
                        this.detail = res.data;
                    });
            },
            fetchDevitTotal() {
                axios.get('/api?action=cash_tb_price_groupby_name&db_name=mysql&name=devit')
                    .then((res) => {
                        this.devit_total = res.data[0];
                    });
            }
        },
        mounted() {
            this.getYearMonth();
            this.fetchDetail();
            this.fetchDevitTotal();
        }
    };

</script>