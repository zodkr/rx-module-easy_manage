@load('config.scss')
@load('config.js')

{{-- 템플릿 v2 문법은 https://rhymix.org/manual/theme/template_v2 참고하세요 --}}

<div class="x_page-header">
	<h1>{{ $lang->cmd_easy_manage }}</h1>
</div>

<ul class="x_nav x_nav-tabs">
	<li @class(['x_active' => $act === 'dispEasy_manageAdminConfig'])>
		<a href="@url(['module' => 'admin', 'act' => 'dispEasy_manageAdminConfig'])">{{ $lang->cmd_easy_manage_general_config }}</a>
	</li>
</ul>

<form class="x_form-horizontal" action="./" method="post" id="easy_manage">
	<input type="hidden" name="module" value="easy_manage" />
	<input type="hidden" name="act" value="procEasy_manageAdminInsertConfig" />
	<input type="hidden" name="success_return_url" value="{{ getRequestUriByServerEnviroment() }}" />
	<input type="hidden" name="xe_validator_id" value="modules/easy_manage/views/admin/config/1" />

	@if (!empty($XE_VALIDATOR_MESSAGE) && $XE_VALIDATOR_ID == 'modules/easy_manage/views/admin/config/1')
		<div class="message {{ $XE_VALIDATOR_MESSAGE_TYPE }}">
			<p>{{ $XE_VALIDATOR_MESSAGE }}</p>
		</div>
	@endif

	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label" for="example_config">{{ $lang->cmd_easy_manage_example_config}} </label>
			<div class="x_controls">
				<select name="example_config" id="example_config">
					<option value="Y" @selected($config->example_config !== 'N')>{{ $lang->cmd_yes }}</option>
					<option value="N" @selected($config->example_config === 'N')>{{ $lang->cmd_no }}</option>
				</select>
			</div>
		</div>
	</section>

	<div class="btnArea x_clearfix">
		<button type="submit" class="x_btn x_btn-primary x_pull-right">{{ $lang->cmd_registration }}</button>
	</div>

</form>
