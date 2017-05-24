var login = new login()

function login()
{
	init();

	function init()
	{
		$(document).ready(function()
		{
			document_ready();
		})
	}
	function document_ready()
	{
		event_click_btn();
		
	}
	function event_click_btn()
	{
		$("body").on("click", ".btn", function(e)
		{
			action_show_quote_of_button($(e.currentTarget));
			action_highlight_button($(e.currentTarget));
			action_get_customer_data();
		});
	}
	function action_get_customer_data()
	{
		$.ajax(
		{
			url:"/home_ajax_customer",
			dataType:"json",
			type:"get",
			success: function(data)
			{
				$.each(data._customer, function(key, val)
				{
					$(".btn-container").append("<button class='btn btn-default' description='" + val.first_name + "'>" + val.last_name.toUpperCase() + "</button>")

				});
			}
		})
	}
	function action_highlight_button($target)
	{
		$(".btn").removeClass("btn-danger");
		$target.addClass("btn-danger");
	}
	function action_alert_button_label($target)
	{
		$btn_label = $target.text();
		alert($btn_label);
	}
	function action_show_quote_of_button($target)
	{
		$quote = $target.attr("description");
		action_show_text_to_container($quote);
	}
	function action_show_text_to_container($text)
	{
		$(".quotation").text($text);
	}
}