<?php if(!defined("ZHPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>线路分类管理</title>
    <script type='text/javascript' src='http://www.his.com/zh/ZHPHP/zhphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://www.his.com/zh/ZHPHP/zhphp/../zhjs/css/zhjs.css' rel='stylesheet' media='screen'>
<script src='http://www.his.com/zh/ZHPHP/zhphp/../zhjs/js/zhjs.js'></script>
<script src='http://www.his.com/zh/ZHPHP/zhphp/../zhjs/js/slide.js'></script>
<script src='http://www.his.com/zh/ZHPHP/zhphp/../zhjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
HOST = '<?php echo $GLOBALS['user']['HOST'];?>';
ROOT = '<?php echo $GLOBALS['user']['ROOT'];?>';
WEB = '<?php echo $GLOBALS['user']['WEB'];?>';
URL = '<?php echo $GLOBALS['user']['URL'];?>';
ZHPHP = '<?php echo $GLOBALS['user']['ZHPHP'];?>';
ZHPHPDATA = '<?php echo $GLOBALS['user']['ZHPHPDATA'];?>';
ZHPHPTPL = '<?php echo $GLOBALS['user']['ZHPHPTPL'];?>';
ZHPHPEXTEND = '<?php echo $GLOBALS['user']['ZHPHPEXTEND'];?>';
APP = '<?php echo $GLOBALS['user']['APP'];?>';
CONTROL = '<?php echo $GLOBALS['user']['CONTROL'];?>';
METH = '<?php echo $GLOBALS['user']['METH'];?>';
GROUP = '<?php echo $GLOBALS['user']['GROUP'];?>';
TPL = '<?php echo $GLOBALS['user']['TPL'];?>';
CONTROLTPL = '<?php echo $GLOBALS['user']['CONTROLTPL'];?>';
STATIC = '<?php echo $GLOBALS['user']['STATIC'];?>';
PUBLIC = '<?php echo $GLOBALS['user']['PUBLIC'];?>';
HISTORY = '<?php echo $GLOBALS['user']['HISTORY'];?>';
TEMPLATE = '<?php echo $GLOBALS['user']['TEMPLATE'];?>';
ROOTURL = '<?php echo $GLOBALS['user']['ROOTURL'];?>';
WEBURL = '<?php echo $GLOBALS['user']['WEBURL'];?>';
CONTROLURL = '<?php echo $GLOBALS['user']['CONTROLURL'];?>';
PHPSELF = '<?php echo $GLOBALS['user']['PHPSELF'];?>';
</script>
    <script type="text/javascript" src="http://www.his.com/zh/Zhcms/Admin/Tpl/Line/js/js.js"></script>
</head>
<body>
<div class="wrap">
    <div class="content-nr">
        <div class="web-set">
            <dl>
                <dd>
                    <?php $zh["list"]["lineKind"]["total"]=0;if(isset($lineKinds) && !empty($lineKinds)):$_id_lineKind=0;$_index_lineKind=0;$lastlineKind=min(1000,count($lineKinds));
$zh["list"]["lineKind"]["first"]=true;
$zh["list"]["lineKind"]["last"]=false;
$_total_lineKind=ceil($lastlineKind/1);$zh["list"]["lineKind"]["total"]=$_total_lineKind;
$_data_lineKind = array_slice($lineKinds,0,$lastlineKind);
if(count($_data_lineKind)==0):echo "";
else:
foreach($_data_lineKind as $key=>$lineKind):
if(($_id_lineKind)%1==0):$_id_lineKind++;else:$_id_lineKind++;continue;endif;
$zh["list"]["lineKind"]["index"]=++$_index_lineKind;
if($_index_lineKind>=$_total_lineKind):$zh["list"]["lineKind"]["last"]=true;endif;?>

                        <?php if($lineKind['name'] == $lineKinds['lineday']['name']){?>
                            <a class="on" href="<?php echo $lineKind['url'];?>">
                        <?php  }else{ ?>
                            <a href="<?php echo $lineKind['url'];?>">
                        <?php }?>
                        <?php echo $lineKind['name'];?></a>
                    <?php $zh["list"]["lineKind"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                </dd>
            </dl>
        </div>
    </div>
    <div class="menu_list" style="clear: both;">
        <ul>
                <li><a href="<?php echo U('day');?>" class="action"><?php echo $currentKindName;?>列表</a></li>
                <li><a href="<?php echo U('day_add');?>">添加<?php echo $currentKindName;?></a></li>
                <li>
    				<a href="javascript:zh_ajax('<?php echo U(day_UpdateCache);?>')">
    					缓存更新
    				</a>
    			</li>
        </ul>
    </div>
    <table class="table2 zh-form">
        <thead>
        <tr>
            <td>id</td>
            <td>天数</td>
            <td>是否前台显示</td>
            <td>操作</td>
        </tr>
        </thead>
        <?php $zh["list"]["data"]["total"]=0;if(isset($list) && !empty($list)):$_id_data=0;$_index_data=0;$lastdata=min(1000,count($list));
$zh["list"]["data"]["first"]=true;
$zh["list"]["data"]["last"]=false;
$_total_data=ceil($lastdata/1);$zh["list"]["data"]["total"]=$_total_data;
$_data_data = array_slice($list,0,$lastdata);
if(count($_data_data)==0):echo "";
else:
foreach($_data_data as $key=>$data):
if(($_id_data)%1==0):$_id_data++;else:$_id_data++;continue;endif;
$zh["list"]["data"]["index"]=++$_index_data;
if($_index_data>=$_total_data):$zh["list"]["data"]["last"]=true;endif;?>

            <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['word'];?>日游</td>
                <td>
                    <?php if($data['isdisplay'] == 1){?>
                        <img src="http://www.his.com/zh/Zhcms/Admin/Tpl/Line/img/yes.gif" />
                    <?php  }else{ ?>
                        <img src="http://www.his.com/zh/Zhcms/Admin/Tpl/Line/img/no.gif" />
                    <?php }?>
                </td>
                <td>
				    <a href="<?php echo U('day_edit',array('id'=>$data['id']));?>">
				        修改
				    </a>|
                    <a href="javascript:confirm('确定删除？')?zh_ajax('<?php echo U(day_del);?>',{id:<?php echo $data['id'];?>}):void(0);">删除</a>
                    
                </td>
            </tr>
        <?php $zh["list"]["data"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
    </table>
    <div class="h60"></div>
</div>
</body>
</html>