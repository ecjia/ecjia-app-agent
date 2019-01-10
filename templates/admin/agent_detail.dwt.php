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
        <!-- {if $action_link} -->
        <a class="btn plus_or_reply data-pjax" href="{$action_link.href}" id="sticky_a"><i class="fontello-icon-reply"></i>{$action_link.text}</a>
        <!-- {/if} -->
    </h3>
</div>

<div class="row-fluid">
    <div class="span12 foldable-list">
        <div class="accordion-group">
            <div class="accordion-heading">
                <div class="accordion-toggle acc-in" data-toggle="collapse" data-target="#detail_info_one">
                    <strong>基本信息</strong>
                    <a class="m_l5 stop_propagation" target="_blank" href='{url path="agent/admin/edit" args="id={$data.id}"}'>编辑</a>
                </div>
            </div>
            <div class="accordion-body in collapse" id="detail_info_one">
                <table class="table table-oddtd m_b0">
                    <tbody class="first-td-no-leftbd">
                        <tr>
                            <td>
                                <div align="right"><strong>代理商名称：</strong></div>
                            </td>
                            <td>{$data.agent_name}</td>
                            <td>
                                <div align="right"><strong>手机号码：</strong></div>
                            </td>
                            <td>{$data.mobile_phone}</td>
                        </tr>
                        <tr>
                            <td>
                                <div align="right"><strong>邮箱账号：</strong></div>
                            </td>
                            <td>{$data.email}</td>
                            <td>
                                <div align="right"><strong>代理等级：</strong></div>
                            </td>
                            <td>{$data.agent_rank}</td>
                        </tr>
                        <tr>
                            <td>
                                <div align="right"><strong>管辖区域：</strong></div>
                            </td>
                            <td>{$data.area_region}</td>
                            <td>
                                <div align="right"><strong>添加时间：</strong></div>
                            </td>
                            <td>{$data.add_time}</td>
                        </tr>
                        <tr>
                            <td>
                                <div align="right"><strong>最后登录时间：</strong></div>
                            </td>
                            <td colspan="3">{$data.last_login_time}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <div class="accordion-toggle acc-in" data-toggle="collapse" data-target="#detail_info_two">
                    <strong>推广情况</strong>
                </div>
            </div>
            <div class="accordion-body in collapse" id="detail_info_two">
                <div class="item-content">
                    <div class="item">累计推广店铺：<span class="ecjiafc-FF0000">{$data.spread_store}</span></div>
                    <div class="item">累计入驻金：<span class="ecjiafc-FF0000">{$user.formated_franchisee_money}</span></div>
                    <div class="item">累计推广金额：<span class="ecjiafc-FF0000">{$user.formated_spread_money}</span></div>
                </div>
            </div>
        </div>

        <div class="accordion-group">
            <div class="accordion-heading">
                <div class="accordion-toggle acc-in" data-toggle="collapse" data-target="#detail_info_three">
                    <strong>推广明细</strong>
                </div>
            </div>
            <div class="accordion-body in collapse" id="detail_info_three">
                <table class="table table-striped m_b0">
                    <thead class="ecjiaf-bt">
                        <tr>
                            <th>店铺名称</th>
                            <th>商家分类</th>
                            <th>负责人</th>
                            <th>手机号码</th>
                            <th>缴纳入驻金</th>
                            <th>推广比例</th>
                            <th>推广金额</th>
                            <th>申请时间</th>
                            <th>结算状态</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {foreach from=$list item=val} -->
                        <tr>
                            <td>{$val.store_name}</td>
                            <td>{$val.store_category}</td>
                            <td>{$val.user_name}</td>
                            <td>{$val.mobile_phone}</td>
                            <td>{$val.franchisee_money}</td>
                            <td>{$val.spread_percent}</td>
                            <td>{$val.spread_money}</td>
                            <td>{$val.apply_time}</td>
                            <td>{$val.label_status}</td>
                        </tr>
                        <!-- {foreachelse} -->
                        <tr>
                            <td class="no-records" colspan="9">{lang key='system::system.no_records'}</td>
                        </tr>
                        <!-- {/foreach} -->
                    </tbody>
                </table>
                <!-- {$list.page} -->
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->