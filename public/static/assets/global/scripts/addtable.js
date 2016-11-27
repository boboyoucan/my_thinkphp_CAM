/**
 * Created by wbw on 16-11-25.
 */
    //jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';

jQuery(document).ready(function() {
    /*
     *添加学院信息
     */
    var save =document.getElementById('save');
    var add_tr=document.getElementById("add_tr");
    jQuery('#add').click(function () {
        add_tr.style.display='';
    });
    jQuery('#cancel').click(function () {
        add_tr.style.display='none';
    });
    jQuery('#save').mouseover(function () {
        var add_input=document.getElementById("add_input").value;
        if(add_input == ""){
            $('.common-alert').show();
            save.disabled=true;
        }else{
            var $add_input=document.getElementById("add_input").value;
            save.disabled=false;
            $('.common-alert').hide();
        }
    });
    jQuery('#add_input').mouseover(function () {
        save.disabled=false;
        $('.common-alert').hide();
    });
});
/*
* 点击更新学院名称时的动作
 */
function change(i) {
    //更新按钮--隐藏
    var up_bt_i=document.getElementById('update_button_'+i);
    up_bt_i.style.display='none';
    //删除按钮--隐藏
    var de_bt_i=document.getElementById('delete_button_'+i);
    de_bt_i.style.display='none';
    //更新保存按钮--显示’保存‘按钮
    var up_sa_bt_i=document.getElementById('update_save_button_'+i);
    up_sa_bt_i.style.display='';
    //更新取消按钮--显示‘取消’按钮
    var up_ca_bt_i=document.getElementById('update_cal_button_'+i);
    up_ca_bt_i.style.display='';
    //表格中一列 --隐藏显示的表格一列
    var td_row_i=document.getElementById('td_row_'+i);
    td_row_i.style.display='none';
    //把表格的一列转换为input标签的样式显示
    var td_update_row_i=document.getElementById('td_update_row_'+i);
    td_update_row_i.style.display='';
}
/*
 * 点击更新学院名称的动作后取消按钮的动作
 */
function cancel(i){
    //更新按钮--显示
    var up_bt_i=document.getElementById('update_button_'+i);
    up_bt_i.style.display='';
    //删除按钮--显示
    var de_bt_i=document.getElementById('delete_button_'+i);
    de_bt_i.style.display='';
    //更新保存按钮--隐藏’保存‘按钮
    var up_sa_bt_i=document.getElementById('update_save_button_'+i);
    up_sa_bt_i.style.display='none';
    //更新取消按钮--隐藏‘取消’按钮
    var up_ca_bt_i=document.getElementById('update_cal_button_'+i);
    up_ca_bt_i.style.display='none';
    //表格中一列 --显示表格一列
    var td_row_i=document.getElementById('td_row_'+i);
    td_row_i.style.display='';
    //把表格的一列转换为input标签的样式显示 --隐藏
    var td_update_row_i=document.getElementById('td_update_row_'+i);
    td_update_row_i.style.display='none';
}