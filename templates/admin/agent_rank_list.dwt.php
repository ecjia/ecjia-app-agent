<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	// ecjia.admin.agent.init();
</script>
<!-- {/block} -->

<!-- {block name="main_content"} -->
<div>
	<h3 class="heading">
		<!-- {if $ur_here}{$ur_here}{/if} -->
		{if $action_link}
			<a class="btn plus_or_reply data-pjax" href="{$action_link.href}" id="sticky_a"><i class="fontello-icon-plus"></i>{$action_link.text}</a>
		{/if}
	</h3>
</div>

<div class="row-fluid">
	<div class="span12">
		<table class="table table-striped table-hide-edit">
			<thead>
				<tr>
                    <th>等级名称</th>
                    <th>等级别名</th>
                    <th>分红比例</th>
                    <th class="w70">操作</th>
                </tr>
			</thead>
			<tbody>
                <!-- {foreach from=$agent_rank item=val key=k} -->
                <tr>
                    <td>{$val.rank_name}</td>
                    <td>{$val.rank_alias}</td>
                    <td>{$val.affiliate_percent}%</td>
                    <td>
                        <a class="data-pjax" href="{RC_Uri::url('agent/admin_rank/edit')}&id={$k+1}"><i class="fontello-icon-edit"></i></a>
                    </td>
                </tr>
                <!-- {foreachelse} -->
                <tr><td class="no-records" colspan="7">{lang key='system::system.no_records'}</td></tr>
                <!-- {/foreach} -->
            </tbody>
     	</table>
	   <!-- {$list.page} -->
	</div>
</div>
<!-- {/block} -->