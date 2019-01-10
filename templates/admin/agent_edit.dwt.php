<?php defined('IN_ECJIA') or exit('No permission resources.'); ?>
<!-- {extends file="ecjia.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
    ecjia.admin.agent.init();
</script>
<!-- {/block} -->

<!-- {block name="main_content"} -->
<div>
    <h3 class="heading">
        <!-- {if $ur_here}{$ur_here}{/if} -->
        {if $action_link}
        <a class="btn plus_or_reply data-pjax" href="{$action_link.href}" id="sticky_a"><i class="fontello-icon-reply"></i>{$action_link.text}</a>
        {/if}
    </h3>
</div>

<div class="row-fluid">
    <div class="span12">
        <form class="form-horizontal" action="{$form_action}" method="post" enctype="multipart/form-data" name="theForm">
            <div class="control-group formSep">
                <label class="control-label">代理商名称：</label>
                <div class="controls">
                    <input class="span6" type="text" name="agent_name" value="{$data.name}" />
                    <span class="input-must">{lang key='system::system.require_field'}</span>
                </div>
            </div>

            <div class="control-group formSep">
                <label class="control-label">手机号码：</label>
                <div class="controls">
                    <input class="span6" type="text" name="mobile_phone" value="{$data.mobile_phone}" />
                    <span class="input-must">{lang key='system::system.require_field'}</span>
                </div>
            </div>

            <div class="control-group formSep">
                <label class="control-label">邮箱账号：</label>
                <div class="controls">
                    <input class="span6" type="text" name="email" value="{$data.email}" autocomplete="off" />
                </div>
            </div>

            <div class="control-group formSep">
                <label class="control-label">登录密码：</label>
                <div class="controls">
                    <input class="span6" type="text" name="login_password" value="" autocomplete="off" />
                    <span class="input-must">{lang key='system::system.require_field'}</span>
                </div>
            </div>

            <div class="control-group formSep">
                <label class="control-label">管辖地区：</label>
                <div class="controls choose_list">
                    <select class="region-summary-provinces w120" name="area_province" id="selProvinces" data-url="{url path='setting/region/init'}" data-toggle="regionSummary" data-type="2" data-target="region-summary-cities">
                        <option value='0'>{lang key='system::system.select_please'}</option>
                        <!-- {foreach from=$province item=region} -->
                        <option value="{$region.region_id}" {if $region.region_id eq $data.area_province}selected{/if}>{$region.region_name}</option>
                        <!-- {/foreach} -->
                    </select>
                    <select class="region-summary-cities w120" name="area_city" id="selCities" data-toggle="regionSummary" data-type="3" data-target="region-summary-district">
                        <option value='0'>{lang key='system::system.select_please'}</option>
                        <!-- {foreach from=$city item=region} -->
                        <option value="{$region.region_id}" {if $region.region_id eq $data.area_city}selected{/if}>{$region.region_name}</option>
                        <!-- {/foreach} -->
                    </select>
                    <select class="region-summary-district w120" name="area_district" id="seldistrict">
                        <option value='0'>{lang key='system::system.select_please'}</option>
                        <!-- {foreach from=$district item=region} -->
                        <option value="{$region.region_id}" {if $region.region_id eq $data.area_district}selected{/if}>{$region.region_name}</option>
                        <!-- {/foreach} -->
                    </select>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="id" value="{$data.id}" />
                    <button class="btn btn-gebo" type="submit">{if $data.id}更新{else}确定{/if}</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- {/block} -->