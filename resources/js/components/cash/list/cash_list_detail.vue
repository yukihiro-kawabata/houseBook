<template>
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
                <tr>
                    <tr id="detail_tr_">
                        <td><span class="circle devit"></span>devit</td>
                        <td>1,000</td>
                        <td>食費</td>
                        <td>一週間分の食料</td>
                        <td>2020-04-20</td>
                        <td class="text-center"><button type="button" class="button_cumstom" onclick="alert();">削除</button></td>
                    </tr>
                </tr>
            </tbody>
        </table>
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