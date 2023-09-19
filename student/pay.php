<?php
session_start();
$apikey="rzp_test_kT4xCRPghH7j78";
$email=$_SESSION['email'];
$fees=$_SESSION['fees'];
require("../mentor/connection.php");

$sql="select * from educorner_registration where educorner_registration.email='$email'";
$res=select($sql);

$user=mysqli_fetch_assoc($res);

?>
<!doctype html>
	<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1">
		<meta name="robots" content="index, follow">

		<link rel="icon" href="assets/img/favicon.png"  type="image/x-icon">


		<style>
			body 
			{
				overflow: hidden; /* Hide scrollbars */
				height: 100vh;
				background-color: #383838;
			}
		</style>



		<script src="https://cdn.razorpay.com/static/analytics/bundle.js" defer=""></script>
		<script src="https://cdn.razorpay.com/static/assets/color.js"></script>
		<script src="https://cdn.razorpay.com/static/hosted/wysiwyg.js" sync="" defer=""></script>
		<script src="https://checkout.razorpay.com/v1/checkout.js" async="" defer=""></script>

		<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


		<script>

			function pay(amt){
				var options = {
				"key": "<?php echo $apikey?>", // Enter the Key ID generated from the Dashboard
				"amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
				"currency": "INR",
				"name": "Educorner",
				"description": "Payment",
				"image": "../images/logo.png",
				
				"callback_url": "php/success.php",
				"prefill": {
					"name": "Dummy",
					"email": "<?php echo $_SESSION['email']?>",

				},
				"notes": {
					"address": "Razorpay Corporate Office"
				},
				"theme": {
					"color": "#3399cc"
				}
			};
			var rzp1 = new Razorpay(options);
			rzp1.open();

		}
	</script>

	<style type="text/css">.UI-form.UI-form {
		position: relative;
		color: #515978;
	}
	.UI-form.UI-form.Form--inactive .Field-content {
		opacity: 0.5;
		cursor: not-allowed;
	}
	.UI-form.UI-form.Form--inactive .Field-content .Field-el {
		pointer-events: none;
	}
	.UI-form.UI-form .Field {
		position: relative;
		display: block;
		margin: 24px 0 -21px;
		transition: 0.12s;
	}
	.UI-form.UI-form .Field::after {
		content: '';
		display: table;
		clear: both;
	}
	.UI-form.UI-form .Field--small .Field-wrapper {
		width: 55%;
	}
	.UI-form.UI-form .Field .Field .Field-error,
	.UI-form.UI-form .Field .Field .Field-description {
		display: none;
	}
	.UI-form.UI-form .Field-wrapper {
		position: relative;
		height: 36px;
		min-width: 160px;
		max-width: 360px;
		color: #0d2366;
	}
	.UI-form.UI-form .Field-wrapper .Field-el label {
		line-height: 36px;
	}
	.UI-form.UI-form .Field-addon {
		position: absolute;
		top: 0;
		display: table;
		height: 100%;
	}
	.UI-form.UI-form .Field-addon > * {
		display: table-cell;
		vertical-align: middle;
	}
	.UI-form.UI-form .Field-addon > * > .Field-content {
		margin: 0;
	}
	.UI-form.UI-form .Field--amount div.Field-el {
		pointer-events: none;
	}
	.UI-form.UI-form .Field--amount div.Field-el,
	.UI-form.UI-form .Field--amount input.Field-el {
		background: #fcfcfc;
		border: 1px solid #e3e9eb;
	}
	.UI-form.UI-form .Field--amount--error div.Field-el,
	.UI-form.UI-form .Field--amount--error input.Field-el {
		background: #fffcfc;
		border: 1px solid #fcdada;
	}
	.UI-form.UI-form .Field-error {
		color: #f05050;
		opacity: 0;
		transition: 0.12s;
		min-height: 20px;
	}
	.UI-form.UI-form .Field-description {
		transform: translateY(-21px);
		transition: 0.12s;
		overflow-wrap: break-word;
	}
	.UI-form.UI-form .Field-error,
	.UI-form.UI-form .Field-description {
		font-size: 12px;
		margin: 4px 0;
		line-height: 16px;
	}
	.UI-form.UI-form .Field-addon--after {
		right: 9px;
	}
	.UI-form.UI-form .Field-addon--before {
		left: 10px;
		font-size: 14px;
		font-weight: bold;
	}
	.UI-form.UI-form .Field-addon--after--CheckBox {
		width: 100%;
		right: 0;
	}
	.UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox {
		text-align: right;
	}
	.UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox .Field-wrapper {
		height: 36px;
	}
	.UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox .Field-wrapper .Field-el {
		display: block;
		line-height: 36px;
		background: transparent;
	}
	.UI-form.UI-form .Field-addon--after--CheckBox .Field--CheckBox .Field-wrapper .CheckBox-mark {
		margin-right: 9px;
	}
	.UI-form.UI-form .Field--currency-1 .Field-addon--before + .Field-el {
		padding-left: 20px;
	}
	.UI-form.UI-form .Field--currency-2 .Field-addon--before + .Field-el {
		padding-left: 30px;
	}
	.UI-form.UI-form .Field--currency-3 .Field-addon--before + .Field-el {
		padding-left: 36px;
	}
	.UI-form.UI-form .Field--currency-4 .Field-addon--before + .Field-el {
		padding-left: 46px;
	}
	.UI-form.UI-form .Field--currency-long .Field-addon--before + .Field-el {
		padding-left: 54px;
	}
	.UI-form.UI-form .Field-addon > span> * {
		display: inline-block;
		vertical-align: middle;
	}
	.UI-form.UI-form .Field--has-image img {
		height: 34px;
		margin-left: -9px;
		margin-top: 1px;
		margin-right: 4px;
		border-bottom-left-radius: 1px;
		border-top-left-radius: 1px;
		border-right: 1px solid #e3e9eb;
	}
	.UI-form.UI-form .Field--has-image > .Field-content > .Field-wrapper > .Field-el {
		padding-left: 54px;
	}
	.UI-form.UI-form .Field--amount--selected div.Field-el,
	.UI-form.UI-form .Field--amount--selected input.Field-el {
		background: #fcfdff;
		border: 1px solid #dae7fc;
	}
	.UI-form.UI-form .Field--amount--selected img {
		border-color: #dae7fc;
	}
	.UI-form.UI-form .Field-el {
		line-height: 16px;
		height: 100%;
		width: 100%;
		background: #fff;
		border: 1px solid #e2e2e2;
		border-radius: 2px;
		overflow: hidden;
		font-size: 14px;
		padding: 0 9px;
		outline: none;
		color: inherit;
	}
	.UI-form.UI-form .Field-el::placeholder {
		color: rgba(0,0,0,0.3);
	}
	.UI-form.UI-form .Field.has-error {
		margin-bottom: 0;
	}
	.UI-form.UI-form .Field.has-error .Field-el {
		border-color: #f05050;
	}
	.UI-form.UI-form .Field.has-error .Field-error {
		opacity: 1;
	}
	.UI-form.UI-form .Field.has-error .Field-error + .Field-description {
		transform: translateY(0);
	}
	.UI-form.UI-form .Field--disabled .Field-el {
		cursor: not-allowed;
	}
	.UI-form.UI-form .Field:not(.Field--disabled) .Field-el:hover {
		border-color: #c1c1c1;
	}
	.UI-form.UI-form .Field:not(.Field--disabled) .Field-el:focus {
		border-color: #528ff0;
	}
	.UI-form.UI-form .Field--select select {
		-webkit-appearance: none;
		-webkit-border-radius: 2px;
		-moz-appearance: none;
		text-indent: 0.001px;
		text-overflow: '';
		cursor: pointer;
	}
	.UI-form.UI-form .Field--select .Field-wrapper::before {
		content: '';
		position: absolute;
		right: 12px;
		margin-top: 15px;
		width: 0;
		height: 0;
		border-top: 4px dashed;
		border-right: 4px solid transparent;
		border-left: 4px solid transparent;
		pointer-events: none;
		z-index: 2;
	}
	.UI-form.UI-form .Field--textarea .Field-wrapper {
		height: auto;
		font-size: 0;
	}
	.UI-form.UI-form .Field--textarea textarea.Field-el {
		padding: 8px 12px;
		height: 32px;
		min-height: 32px;
		max-height: 230px;
		line-height: 16px;
		resize: vertical;
	}
	.UI-form.UI-form .Field--textarea .Field-el--textarea-fake {
		width: 100%;
		height: 32px;
		overflow: hidden;
		padding: 0 16px 0 10px;
		line-height: 20px;
		font-size: 14px;
		visibility: hidden;
		position: absolute;
	}
	.UI-form.UI-form .Field-label {
		position: relative;
		float: left;
		width: 140px;
		font-size: 14px;
		line-height: 20px;
		color: #515978;
		word-break: break-word;
	}
	.UI-form.UI-form .Field-label .text-optional {
		font-size: 12px;
		opacity: 0.7;
	}
	.UI-form.UI-form .Field .symbol--red {
		color: #f05050;
		display: none;
	}
	.UI-form.UI-form .Field--required .symbol--red {
		display: inline-block;
	}
	.UI-form.UI-form .Field-content {
		margin-left: 164px;
	}
	.UI-form.UI-form .Field--CheckBox {
		font-size: 0;
	}
	.UI-form.UI-form .Field--CheckBox .Field-wrapper {
		min-width: unset;
		max-width: unset;
	}
	.UI-form.UI-form .Field--CheckBox .Field-el {
		font-size: 0;
	}
	.UI-form.UI-form .Field--CheckBox .CheckBox-mark {
		margin: 0;
		width: 18px;
		height: 18px;
	}
	.UI-form.UI-form .Field--CheckBox .CheckBox-mark::after {
		margin: 4px 0 0 7px;
	}
	.UI-form.UI-form .Field--counter .Field-label {
		margin-bottom: 0;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper {
		min-width: 96px;
		max-width: 96px;
		height: 24px;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper button {
		position: absolute;
		width: 28px;
		height: 22px;
		font-size: 20px;
		background: transparent;
		padding: 0 0 3px 1px;
		user-select: none;
		outline: 0;
		-webkit-tap-highlight-color: transparent;
		cursor: pointer;
		top: 0;
		line-height: 100%;
		font-weight: bold;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper button:disabled,
	.UI-form.UI-form .Field--counter .Field-wrapper button[disabled] {
		opacity: 0.3;
		cursor: not-allowed;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper button:hover {
		background: #f6f6f6;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper button:active {
		background: #e3e3e3;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper button:nth-of-type(1) {
		left: 0;
		border-top-left-radius: 1px;
		border-bottom-left-radius: 1px;
		border: none;
		border-right: 1px solid #e2e2e2;
		margin: 1px 0 0 1px;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper button:nth-of-type(2) {
		right: 0;
		border-top-right-radius: 1px;
		border-bottom-right-radius: 1px;
		border: none;
		border-left: 1px solid #e2e2e2;
		margin: 1px 1px 0 0;
	}
	.UI-form.UI-form .Field--counter .Field-wrapper .counter-value {
		width: 100%;
		padding: 0 32px;
		display: block;
		text-align: center;
		background: #fff;
	}
	.UI-form.UI-form .Field-el[type=number]::-webkit-inner-spin-button,
	.UI-form.UI-form .Field-el[type=number]::-webkit-outer-spin-button {
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		-moz-appearance: textfield;
		margin: 0;
	}
	.UI-form.UI-form .currency-symbol {
		margin-top: 2px;
	}
	@media (max-width: 1024px) {
		.UI-form.UI-form .Field {
			margin-top: 24px;
		}
		.UI-form.UI-form .Field-label {
			width: 100%;
			margin-bottom: 4px;
			text-align: left;
			float: unset;
		}
		.UI-form.UI-form .Field-label .text-optional {
			margin-left: 4px;
			display: inline-block;
		}
		.UI-form.UI-form .Field-content {
			margin-left: 0;
		}
		.UI-form.UI-form .Field-wrapper {
			height: 40px;
			max-width: unset;
		}
		.UI-form.UI-form .Field-wrapper div.Field-el {
			line-height: 40px;
		}
		.UI-form.UI-form .Field-wrapper .Field--CheckBox .Field-wrapper {
			height: 40px;
			line-height: 40px;
		}
		.UI-form.UI-form .Field-wrapper .Field--CheckBox .CheckBox-mark {
			width: 21px;
			height: 21px;
		}
		.UI-form.UI-form .Field-wrapper .Field--CheckBox .CheckBox-mark::after {
			margin: 6px 0 0 8px;
		}
		.UI-form.UI-form .Field--textarea textarea.Field-el {
			height: 40px;
			min-height: 40px;
			line-height: 20px;
		}
		.UI-form.UI-form .Field--select select {
			-webkit-appearance: none;
			-webkit-border-radius: 2px;
			cursor: pointer;
		}
		.UI-form.UI-form .Field--select .Field-wrapper::before {
			margin-top: 18px;
		}
		.UI-form.UI-form .Field--has-image img {
			height: 38px;
		}
		.UI-form.UI-form .Field--has-image > .Field-content > .Field-wrapper > .Field-el {
			padding-left: 58px;
		}
	}
	</style><style type="text/css">.Field.Field--CheckBox {
		display: block;
		cursor: pointer;
	}
	.Field.Field--CheckBox .Field-el {
		border: none;
		padding: 0;
		cursor: inherit;
	}
	.Field.Field--CheckBox .Field-el:active {
		border: none;
	}
	.Field.Field--CheckBox.Field--disabled {
		cursor: not-allowed;
		opacity: 0.6;
	}
	.Field.Field--CheckBox .CheckBox-mark,
	.Field.Field--CheckBox .CheckBox-left {
		vertical-align: middle;
		display: inline-block;
	}
	.Field.Field--CheckBox .CheckBox-mark {
		width: 14px;
		height: 14px;
		border-radius: 1px;
		border: 1px solid #cad1d9;
		background-color: #fff;
		position: relative;
		vertical-align: middle;
		margin-right: 4px;
	}
	.Field.Field--CheckBox .CheckBox-mark::after {
		content: '';
		position: absolute;
		color: #fff;
		transition: 0.12s ease-in;
		opacity: 0;
		display: block;
		width: 2px;
		height: 5px;
		border: solid #fff;
		border-width: 0 1px 1px 0;
		transform: rotate(45deg);
		margin: 2px 0 0 5px;
	}
	.Field.Field--CheckBox [type="checkbox"]:checked + .CheckBox-mark {
		background-color: #429cff;
		border-color: rgba(0,0,0,0.05);
	}
	.Field.Field--CheckBox [type="checkbox"]:checked + .CheckBox-mark:after {
		opacity: 1;
		transform: rotate(45deg) scale(1.5);
	}
	.Field.Field--CheckBox .CheckBox-label {
		font-size: 13px;
		line-height: 16px;
	}
	</style><style type="text/css">.flatpickr-calendar {
		background: transparent;
		opacity: 0;
		display: none;
		text-align: center;
		visibility: hidden;
		padding: 0;
		animation: none;
		direction: ltr;
		border: 0;
		font-size: 14px;
		line-height: 24px;
		border-radius: 5px;
		position: absolute;
		width: 307.875px;
		box-sizing: border-box;
		touch-action: manipulation;
		background: #fff;
		box-shadow: 1px 0 0 #eee, -1px 0 0 #eee, 0 1px 0 #eee, 0 -1px 0 #eee, 0 3px 13px rgba(0,0,0,0.08);
	}
	.flatpickr-calendar.open,
	.flatpickr-calendar.inline {
		opacity: 1;
		max-height: 640px;
		visibility: visible;
	}
	.flatpickr-calendar.open {
		display: inline-block;
		z-index: 99999;
	}
	.flatpickr-calendar.animate.open {
		animation: fpFadeInDown 300ms cubic-bezier(0.23, 1, 0.32, 1);
	}
	.flatpickr-calendar.inline {
		display: block;
		position: relative;
		top: 2px;
	}
	.flatpickr-calendar.static {
		position: absolute;
		top: calc(100% + 2px);
	}
	.flatpickr-calendar.static.open {
		z-index: 999;
		display: block;
	}
	.flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7) {
		box-shadow: none !important;
	}
	.flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1) {
		box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6;
	}
	.flatpickr-calendar .hasWeeks .dayContainer,
	.flatpickr-calendar .hasTime .dayContainer {
		border-bottom: 0;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
	.flatpickr-calendar .hasWeeks .dayContainer {
		border-left: 0;
	}
	.flatpickr-calendar.showTimeInput.hasTime .flatpickr-time {
		height: 40px;
		border-top: 1px solid #eee;
	}
	.flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
		height: auto;
	}
	.flatpickr-calendar:before,
	.flatpickr-calendar:after {
		position: absolute;
		display: block;
		pointer-events: none;
		border: solid transparent;
		content: '';
		height: 0;
		width: 0;
		left: 22px;
	}
	.flatpickr-calendar.rightMost:before,
	.flatpickr-calendar.rightMost:after {
		left: auto;
		right: 22px;
	}
	.flatpickr-calendar:before {
		border-width: 5px;
		margin: 0 -5px;
	}
	.flatpickr-calendar:after {
		border-width: 4px;
		margin: 0 -4px;
	}
	.flatpickr-calendar.arrowTop:before,
	.flatpickr-calendar.arrowTop:after {
		bottom: 100%;
	}
	.flatpickr-calendar.arrowTop:before {
		border-bottom-color: #eee;
	}
	.flatpickr-calendar.arrowTop:after {
		border-bottom-color: #fff;
	}
	.flatpickr-calendar.arrowBottom:before,
	.flatpickr-calendar.arrowBottom:after {
		top: 100%;
	}
	.flatpickr-calendar.arrowBottom:before {
		border-top-color: #eee;
	}
	.flatpickr-calendar.arrowBottom:after {
		border-top-color: #fff;
	}
	.flatpickr-calendar:focus {
		outline: 0;
	}
	.flatpickr-wrapper {
		position: relative;
		display: inline-block;
	}
	.flatpickr-months {
		display: flex;
	}
	.flatpickr-months .flatpickr-month {
		background: transparent;
		color: #3c3f40;
		fill: #3c3f40;
		height: 34px;
		line-height: 1;
		text-align: center;
		position: relative;
		user-select: none;
		overflow: hidden;
		flex: 1;
	}
	.flatpickr-months .flatpickr-prev-month,
	.flatpickr-months .flatpickr-next-month {
		text-decoration: none;
		cursor: pointer;
		position: absolute;
		top: 0;
		height: 34px;
		padding: 10px;
		z-index: 3;
		color: #3c3f40;
		fill: #3c3f40;
	}
	.flatpickr-months .flatpickr-prev-month.flatpickr-disabled,
	.flatpickr-months .flatpickr-next-month.flatpickr-disabled {
		display: none;
	}
	.flatpickr-months .flatpickr-prev-month i,
	.flatpickr-months .flatpickr-next-month i {
		position: relative;
	}
	.flatpickr-months .flatpickr-prev-month.flatpickr-prev-month,
	.flatpickr-months .flatpickr-next-month.flatpickr-prev-month {
/*
/*rtl:begin:ignore*/
/*
*/
left: 0;
/*
/*rtl:end:ignore*/
/*
*/
}
/*
/*rtl:begin:ignore*/
/*
/*rtl:end:ignore*/
.flatpickr-months .flatpickr-prev-month.flatpickr-next-month,
.flatpickr-months .flatpickr-next-month.flatpickr-next-month {
/*
/*rtl:begin:ignore*/
/*
*/
right: 0;
/*
/*rtl:end:ignore*/
/*
*/
}
/*
/*rtl:begin:ignore*/
/*
/*rtl:end:ignore*/
.flatpickr-months .flatpickr-prev-month:hover,
.flatpickr-months .flatpickr-next-month:hover {
	color: #f64747;
}
.flatpickr-months .flatpickr-prev-month:hover svg,
.flatpickr-months .flatpickr-next-month:hover svg {
	fill: #f64747;
}
.flatpickr-months .flatpickr-prev-month svg,
.flatpickr-months .flatpickr-next-month svg {
	width: 14px;
	height: 14px;
}
.flatpickr-months .flatpickr-prev-month svg path,
.flatpickr-months .flatpickr-next-month svg path {
	transition: fill 0.1s;
	fill: inherit;
}
.numInputWrapper {
	position: relative;
	height: auto;
}
.numInputWrapper input,
.numInputWrapper span {
	display: inline-block;
}
.numInputWrapper input {
	width: 100%;
}
.numInputWrapper input::-ms-clear {
	display: none;
}
.numInputWrapper input::-webkit-outer-spin-button,
.numInputWrapper input::-webkit-inner-spin-button {
	margin: 0;
	-webkit-appearance: none;
}
.numInputWrapper span {
	position: absolute;
	right: 0;
	width: 14px;
	padding: 0 4px 0 2px;
	height: 50%;
	line-height: 50%;
	opacity: 0;
	cursor: pointer;
	border: 1px solid rgba(64,72,72,0.15);
	box-sizing: border-box;
}
.numInputWrapper span:hover {
	background: rgba(0,0,0,0.1);
}
.numInputWrapper span:active {
	background: rgba(0,0,0,0.2);
}
.numInputWrapper span:after {
	display: block;
	content: "";
	position: absolute;
}
.numInputWrapper span.arrowUp {
	top: 0;
	border-bottom: 0;
}
.numInputWrapper span.arrowUp:after {
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-bottom: 4px solid rgba(64,72,72,0.6);
	top: 26%;
}
.numInputWrapper span.arrowDown {
	top: 50%;
}
.numInputWrapper span.arrowDown:after {
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-top: 4px solid rgba(64,72,72,0.6);
	top: 40%;
}
.numInputWrapper span svg {
	width: inherit;
	height: auto;
}
.numInputWrapper span svg path {
	fill: rgba(60,63,64,0.5);
}
.numInputWrapper:hover {
	background: rgba(0,0,0,0.05);
}
.numInputWrapper:hover span {
	opacity: 1;
}
.flatpickr-current-month {
	font-size: 135%;
	line-height: inherit;
	font-weight: 300;
	color: inherit;
	position: absolute;
	width: 75%;
	left: 12.5%;
	padding: 7.48px 0 0 0;
	line-height: 1;
	height: 34px;
	display: inline-block;
	text-align: center;
	transform: translate3d(0px, 0px, 0px);
}
.flatpickr-current-month span.cur-month {
	font-family: inherit;
	font-weight: 700;
	color: inherit;
	display: inline-block;
	margin-left: 0.5ch;
	padding: 0;
}
.flatpickr-current-month span.cur-month:hover {
	background: rgba(0,0,0,0.05);
}
.flatpickr-current-month .numInputWrapper {
	width: 6ch;
	width: 7ch\0;
	display: inline-block;
}
.flatpickr-current-month .numInputWrapper span.arrowUp:after {
	border-bottom-color: #3c3f40;
}
.flatpickr-current-month .numInputWrapper span.arrowDown:after {
	border-top-color: #3c3f40;
}
.flatpickr-current-month input.cur-year {
	background: transparent;
	box-sizing: border-box;
	color: inherit;
	cursor: text;
	padding: 0 0 0 0.5ch;
	margin: 0;
	display: inline-block;
	font-size: inherit;
	font-family: inherit;
	font-weight: 300;
	line-height: inherit;
	height: auto;
	border: 0;
	border-radius: 0;
	vertical-align: initial;
	-webkit-appearance: textfield;
	-moz-appearance: textfield;
	appearance: textfield;
}
.flatpickr-current-month input.cur-year:focus {
	outline: 0;
}
.flatpickr-current-month input.cur-year[disabled],
.flatpickr-current-month input.cur-year[disabled]:hover {
	font-size: 100%;
	color: rgba(60,63,64,0.5);
	background: transparent;
	pointer-events: none;
}
.flatpickr-current-month .flatpickr-monthDropdown-months {
	appearance: menulist;
	background: transparent;
	border: none;
	border-radius: 0;
	box-sizing: border-box;
	color: inherit;
	cursor: pointer;
	font-size: inherit;
	font-family: inherit;
	font-weight: 300;
	height: auto;
	line-height: inherit;
	margin: -1px 0 0 0;
	outline: none;
	padding: 0 0 0 0.5ch;
	position: relative;
	vertical-align: initial;
	-webkit-box-sizing: border-box;
	-webkit-appearance: menulist;
	-moz-appearance: menulist;
	width: auto;
}
.flatpickr-current-month .flatpickr-monthDropdown-months:focus,
.flatpickr-current-month .flatpickr-monthDropdown-months:active {
	outline: none;
}
.flatpickr-current-month .flatpickr-monthDropdown-months:hover {
	background: rgba(0,0,0,0.05);
}
.flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
	background-color: transparent;
	outline: none;
	padding: 0;
}
.flatpickr-weekdays {
	background: transparent;
	text-align: center;
	overflow: hidden;
	width: 100%;
	display: flex;
	align-items: center;
	height: 28px;
}
.flatpickr-weekdays .flatpickr-weekdaycontainer {
	display: flex;
	flex: 1;
}
span.flatpickr-weekday {
	cursor: default;
	font-size: 90%;
	background: transparent;
	color: rgba(0,0,0,0.54);
	line-height: 1;
	margin: 0;
	text-align: center;
	display: block;
	flex: 1;
	font-weight: bolder;
}
.dayContainer,
.flatpickr-weeks {
	padding: 1px 0 0 0;
}
.flatpickr-days {
	position: relative;
	overflow: hidden;
	display: flex;
	align-items: flex-start;
	width: 307.875px;
}
.flatpickr-days:focus {
	outline: 0;
}
.dayContainer {
	padding: 0;
	outline: 0;
	text-align: left;
	width: 307.875px;
	min-width: 307.875px;
	max-width: 307.875px;
	box-sizing: border-box;
	display: inline-block;
	display: -ms-flexbox;
	display: flex;
	flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	-ms-flex-pack: justify;
	justify-content: space-around;
	transform: translate3d(0px, 0px, 0px);
	opacity: 1;
}
.dayContainer + .dayContainer {
	box-shadow: -1px 0 0 #eee;
}
.flatpickr-day {
	background: none;
	border: 1px solid transparent;
	border-radius: 150px;
	box-sizing: border-box;
	color: #404848;
	cursor: pointer;
	font-weight: 400;
	width: 14.2857143%;
	flex-basis: 14.2857143%;
	max-width: 39px;
	height: 39px;
	line-height: 39px;
	margin: 0;
	display: inline-block;
	position: relative;
	justify-content: center;
	text-align: center;
}
.flatpickr-day.inRange,
.flatpickr-day.prevMonthDay.inRange,
.flatpickr-day.nextMonthDay.inRange,
.flatpickr-day.today.inRange,
.flatpickr-day.prevMonthDay.today.inRange,
.flatpickr-day.nextMonthDay.today.inRange,
.flatpickr-day:hover,
.flatpickr-day.prevMonthDay:hover,
.flatpickr-day.nextMonthDay:hover,
.flatpickr-day:focus,
.flatpickr-day.prevMonthDay:focus,
.flatpickr-day.nextMonthDay:focus {
	cursor: pointer;
	outline: 0;
	background: #e9e9e9;
	border-color: #e9e9e9;
}
.flatpickr-day.today {
	border-color: #f64747;
}
.flatpickr-day.today:hover,
.flatpickr-day.today:focus {
	border-color: #f64747;
	background: #f64747;
	color: #fff;
}
.flatpickr-day.selected,
.flatpickr-day.startRange,
.flatpickr-day.endRange,
.flatpickr-day.selected.inRange,
.flatpickr-day.startRange.inRange,
.flatpickr-day.endRange.inRange,
.flatpickr-day.selected:focus,
.flatpickr-day.startRange:focus,
.flatpickr-day.endRange:focus,
.flatpickr-day.selected:hover,
.flatpickr-day.startRange:hover,
.flatpickr-day.endRange:hover,
.flatpickr-day.selected.prevMonthDay,
.flatpickr-day.startRange.prevMonthDay,
.flatpickr-day.endRange.prevMonthDay,
.flatpickr-day.selected.nextMonthDay,
.flatpickr-day.startRange.nextMonthDay,
.flatpickr-day.endRange.nextMonthDay {
	background: #4f99ff;
	box-shadow: none;
	color: #fff;
	border-color: #4f99ff;
}
.flatpickr-day.selected.startRange,
.flatpickr-day.startRange.startRange,
.flatpickr-day.endRange.startRange {
	border-radius: 50px 0 0 50px;
}
.flatpickr-day.selected.endRange,
.flatpickr-day.startRange.endRange,
.flatpickr-day.endRange.endRange {
	border-radius: 0 50px 50px 0;
}
.flatpickr-day.selected.startRange + .endRange:not(:nth-child(7n+1)),
.flatpickr-day.startRange.startRange + .endRange:not(:nth-child(7n+1)),
.flatpickr-day.endRange.startRange + .endRange:not(:nth-child(7n+1)) {
	box-shadow: -10px 0 0 #4f99ff;
}
.flatpickr-day.selected.startRange.endRange,
.flatpickr-day.startRange.startRange.endRange,
.flatpickr-day.endRange.startRange.endRange {
	border-radius: 50px;
}
.flatpickr-day.inRange {
	border-radius: 0;
	box-shadow: -5px 0 0 #e9e9e9, 5px 0 0 #e9e9e9;
}
.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover,
.flatpickr-day.prevMonthDay,
.flatpickr-day.nextMonthDay,
.flatpickr-day.notAllowed,
.flatpickr-day.notAllowed.prevMonthDay,
.flatpickr-day.notAllowed.nextMonthDay {
	color: rgba(64,72,72,0.3);
	background: transparent;
	border-color: #e9e9e9;
	cursor: default;
}
.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover {
	cursor: not-allowed;
	color: rgba(64,72,72,0.1);
}
.flatpickr-day.week.selected {
	border-radius: 0;
	box-shadow: -5px 0 0 #4f99ff, 5px 0 0 #4f99ff;
}
.flatpickr-day.hidden {
	visibility: hidden;
}
.rangeMode .flatpickr-day {
	margin-top: 1px;
}
.flatpickr-weekwrapper {
	float: left;
}
.flatpickr-weekwrapper .flatpickr-weeks {
	padding: 0 12px;
	box-shadow: 1px 0 0 #eee;
}
.flatpickr-weekwrapper .flatpickr-weekday {
	float: none;
	width: 100%;
	line-height: 28px;
}
.flatpickr-weekwrapper span.flatpickr-day,
.flatpickr-weekwrapper span.flatpickr-day:hover {
	display: block;
	width: 100%;
	max-width: none;
	color: rgba(64,72,72,0.3);
	background: transparent;
	cursor: default;
	border: none;
}
.flatpickr-innerContainer {
	display: block;
	display: flex;
	box-sizing: border-box;
	overflow: hidden;
}
.flatpickr-rContainer {
	display: inline-block;
	padding: 0;
	box-sizing: border-box;
}
.flatpickr-time {
	text-align: center;
	outline: 0;
	display: block;
	height: 0;
	line-height: 40px;
	max-height: 40px;
	box-sizing: border-box;
	overflow: hidden;
	display: flex;
}
.flatpickr-time:after {
	content: "";
	display: table;
	clear: both;
}
.flatpickr-time .numInputWrapper {
	flex: 1;
	width: 40%;
	height: 40px;
	float: left;
}
.flatpickr-time .numInputWrapper span.arrowUp:after {
	border-bottom-color: #404848;
}
.flatpickr-time .numInputWrapper span.arrowDown:after {
	border-top-color: #404848;
}
.flatpickr-time.hasSeconds .numInputWrapper {
	width: 26%;
}
.flatpickr-time.time24hr .numInputWrapper {
	width: 49%;
}
.flatpickr-time input {
	background: transparent;
	box-shadow: none;
	border: 0;
	border-radius: 0;
	text-align: center;
	margin: 0;
	padding: 0;
	height: inherit;
	line-height: inherit;
	color: #404848;
	font-size: 14px;
	position: relative;
	box-sizing: border-box;
	-webkit-appearance: textfield;
	-moz-appearance: textfield;
	appearance: textfield;
}
.flatpickr-time input.flatpickr-hour {
	font-weight: bold;
}
.flatpickr-time input.flatpickr-minute,
.flatpickr-time input.flatpickr-second {
	font-weight: 400;
}
.flatpickr-time input:focus {
	outline: 0;
	border: 0;
}
.flatpickr-time .flatpickr-time-separator,
.flatpickr-time .flatpickr-am-pm {
	height: inherit;
	float: left;
	line-height: inherit;
	color: #404848;
	font-weight: bold;
	width: 2%;
	user-select: none;
	align-self: center;
}
.flatpickr-time .flatpickr-am-pm {
	outline: 0;
	width: 18%;
	cursor: pointer;
	text-align: center;
	font-weight: 400;
}
.flatpickr-time input:hover,
.flatpickr-time .flatpickr-am-pm:hover,
.flatpickr-time input:focus,
.flatpickr-time .flatpickr-am-pm:focus {
	background: #f1f1f1;
}
.flatpickr-input[readonly] {
	cursor: pointer;
}
@-moz-keyframes fpFadeInDown {
	from {
		opacity: 0;
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}
}
@-webkit-keyframes fpFadeInDown {
	from {
		opacity: 0;
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}
}
@-o-keyframes fpFadeInDown {
	from {
		opacity: 0;
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}
}
@keyframes fpFadeInDown {
	from {
		opacity: 0;
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}
}
.flatpickr-calendar {
	width: 307.875px;
}
.dayContainer {
	padding: 0;
	border-right: 0;
}
span.flatpickr-day,
span.flatpickr-day.prevMonthDay,
span.flatpickr-day.nextMonthDay {
	border-radius: 0 !important;
	border: 1px solid #e9e9e9;
	max-width: none;
	border-right-color: transparent;
}
span.flatpickr-day:nth-child(n+8),
span.flatpickr-day.prevMonthDay:nth-child(n+8),
span.flatpickr-day.nextMonthDay:nth-child(n+8) {
	border-top-color: transparent;
}
span.flatpickr-day:nth-child(7n-6),
span.flatpickr-day.prevMonthDay:nth-child(7n-6),
span.flatpickr-day.nextMonthDay:nth-child(7n-6) {
	border-left: 0;
}
span.flatpickr-day:nth-child(n+36),
span.flatpickr-day.prevMonthDay:nth-child(n+36),
span.flatpickr-day.nextMonthDay:nth-child(n+36) {
	border-bottom: 0;
}
span.flatpickr-day:nth-child(-n+7),
span.flatpickr-day.prevMonthDay:nth-child(-n+7),
span.flatpickr-day.nextMonthDay:nth-child(-n+7) {
	margin-top: 0;
}
span.flatpickr-day.today:not(.selected),
span.flatpickr-day.prevMonthDay.today:not(.selected),
span.flatpickr-day.nextMonthDay.today:not(.selected) {
	border-color: #e9e9e9;
	border-right-color: transparent;
	border-top-color: transparent;
	border-bottom-color: #f64747;
}
span.flatpickr-day.today:not(.selected):hover,
span.flatpickr-day.prevMonthDay.today:not(.selected):hover,
span.flatpickr-day.nextMonthDay.today:not(.selected):hover {
	border: 1px solid #f64747;
}
span.flatpickr-day.startRange,
span.flatpickr-day.prevMonthDay.startRange,
span.flatpickr-day.nextMonthDay.startRange,
span.flatpickr-day.endRange,
span.flatpickr-day.prevMonthDay.endRange,
span.flatpickr-day.nextMonthDay.endRange {
	border-color: #4f99ff;
}
span.flatpickr-day.today,
span.flatpickr-day.prevMonthDay.today,
span.flatpickr-day.nextMonthDay.today,
span.flatpickr-day.selected,
span.flatpickr-day.prevMonthDay.selected,
span.flatpickr-day.nextMonthDay.selected {
	z-index: 2;
}
.rangeMode .flatpickr-day {
	margin-top: -1px;
}
.flatpickr-weekwrapper .flatpickr-weeks {
	box-shadow: none;
}
.flatpickr-weekwrapper span.flatpickr-day {
	border: 0;
	margin: -1px 0 0 -1px;
}
.hasWeeks .flatpickr-days {
	border-right: 0;
}

@media screen and (min-width:0\0) and (min-resolution: +72dpi) {
	span.flatpickr-day {
		display: block;
		flex: 1 0 auto;
	}
}
</style><style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Muli:400,600,700')
	html {
		overflow: hidden;
		box-sizing: border-box;
		font-family: inherit;
	}
	html * {
		box-sizing: border-box;
		font-family: inherit;
	}
	html,
	body {
		height: 100%;
	}
	body {
		margin: 0;
		font-family: Lato, Muli, BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
		overflow: auto;
	}
	b {
		font-weight: bold;
	}
	a {
		text-decoration: none;
		color: #528ff0;
		display: inline-block;
	}
	ol,
	p {
		padding: 0;
		font-size: 14px;
		line-height: 20px;
	}
	ol {
		padding-left: 15px;
		margin: 16px 0 32px 0;
	}
	ol li {
		margin-bottom: 10px;
	}
	p {
		white-space: pre-wrap;
		word-wrap: break-word;
		margin-top: 20px;
	}
	body {
		color: #515978;
		-webkit-font-smoothing: antialiased;
	}
	img {
		font-size: 12px;
		color: #515978;
		line-height: 20px;
	}
	.btn {
		color: #fff;
		border: 0;
		outline: none;
		cursor: pointer;
		font-size: 14px;
		padding: 10px 16px;
		border-radius: 2px;
		transition: all 0.3s;
		text-align: center;
		margin: 0;
	}
	.btn[disabled] {
		opacity: 0.4;
		cursor: not-allowed;
	}
	.btn--full {
		width: 100%;
	}
	.btn--gradient {
		background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0.1) 100%);
	}
	.btn:active {
		box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset, 0 0 6px rgba(0,0,0,0.2) inset;
	}
	.btn svg {
		fill: #fff;
	}
	.btn-link {
		color: #528ff0;
		background: #fff;
		border: 0;
		cursor: pointer;
		padding: 0;
		font-size: 14px;
		outline: none;
		padding-left: 4px;
	}
	.error {
		color: #f05050;
		font-size: 14px;
	}
	.title {
		position: relative;
		color: #0d2366;
		overflow-wrap: break-word;
		font-weight: bold;
		font-size: 18px;
		line-height: 24px;
	}
	.title--big {
		font-size: 24px;
		line-height: 32px;
	}
	.title-underline {
		display: block;
		width: 28px;
		border-bottom: 5px solid;
		margin-top: 20px;
		border-color: #528ff0;
	}
	.banner {
		padding: 12px 24px;
		background-color: #fcf8e3;
		color: #8a6d3b;
		font-size: 12px;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
		position: relative;
		line-height: 18px;
	}
	.banner.banner--error {
		background-color: #fce8e3;
		color: #d34c4c;
	}
	.hide {
		display: none;
	}
	.text-wrap {
		white-space: pre-wrap;
		word-wrap: break-word;
	}
	.pill {
		border: 2px;
		padding: 4px 8px;
		min-width: 60px;
		text-align: center;
		background: #e7e8e9;
		vertical-align: middle;
		border-radius: 2px;
		display: inline-block;
	}
	.pill--yellow {
		color: #fcf8e3;
		background: #528ff0;
	}
	body div.redirect-message {
		display: none;
	}
	body.has-redirect div.redirect-message {
		display: block;
	}
	.theme-mobile {
		background-position: top;
		background-size: cover;
	}
	.theme-mobile.dark {
		background-image: url("https://cdn.razorpay.com/static/assets/paymentpages/dark_mobile.jpg");
	}
	.theme-mobile.light {
		background-image: url("https://cdn.razorpay.com/static/assets/paymentpages/light_mobile.jpg");
	}
	.theme-desktop::before {
		content: '';
		top: 0;
		position: absolute;
		right: 0;
		width: 30%;
		height: 100%;
		background-position: right top;
		background-size: cover;
		background-repeat: no-repeat;
		background-color: inherit;
	}
	.theme-desktop.dark::before {
		background-image: url("https://cdn.razorpay.com/static/assets/paymentpages/dark_desktop.svg");
	}
	.theme-desktop.light::before {
		background-image: url("https://cdn.razorpay.com/static/assets/paymentpages/light_desktop.svg");
	}
	#paymentpage-container {
		position: relative;
		font-family: "Muli", "Lato", -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
	}
	#header-details {
		position: relative;
	}
	#header-details #header-logo {
		text-align: center;
		position: relative;
		border-radius: 3px;
		box-shadow: 0 2px 4px 0 rgba(0,0,0,0.18);
		background: #fff;
		padding: 8px;
		display: inline-block;
	}
	#header-details #header-logo img {
		width: 100%;
		display: block;
	}
	.slider-view {
		background: #fff;
		position: relative;
		transition: 0.2s;
	}
	#main-view {
		position: relative;
		border-radius: 2px;
		box-shadow: 6px 11px 24px 0 rgba(23,31,37,0.12);
		background: #fff;
	}
	.content-container {
		position: relative;
		width: 100%;
		height: 100%;
	}
	#details-view {
		position: relative;
		bottom: 0;
		white-space: nowrap;
	}
	#details-view .details-value {
		margin-top: 4px;
		color: #515978;
		font-size: 14px;
		line-height: 22px;
	}
	#details-view #details-section > div {
		position: relative;
	}
	#details-view #details-section > div .sub-detail {
		line-height: 28px;
	}
	#details-view label {
		font-size: 14px;
		font-weight: bold;
		line-height: 18px;
		color: #0d2366;
		margin-bottom: 8px;
	}
	#details-view #description-details {
		position: relative;
		color: #515978;
	}
	#details-view #description-details #description {
		margin-top: 24px;
	}
	#details-view #description-details .showmore {
		background: linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,0.8));
		line-height: 14px;
		padding-left: 10px;
		margin-left: -9px;
	}
	#details-view #support-details svg,
	#details-view #support-details div {
		vertical-align: middle;
	}
	#details-view #support-details svg {
		fill: #0d2366;
		width: 16px;
		margin-right: 8px;
	}
	#details-view #support-details a div {
		color: #0d2366;
		font-size: 14px;
		display: inline-block;
	}
	.title + #form-section {
		margin-top: 36px;
	}
	.details-footer {
		font-size: 12px;
		line-height: 18px;
		box-shadow: 0 -4px 4px -4px rgba(0,0,0,0.18);
		padding: 16px 0;
		width: 100%;
		color: #8894ba;
		white-space: normal;
	}
	.details-footer #rzp-logo {
		width: 98px;
		margin-bottom: 4px;
	}
	.details-footer #secured-by-rzp {
		vertical-align: middle;
		width: 172px;
	}
	#share-details .share-icons {
		font-size: 0;
		margin-top: 8px;
	}
	#share-details a {
		cursor: pointer;
	}
	#form-section {
		position: relative;
	}
	#form-section #form-footer {
		position: relative;
	}
	#form-section .form-footer-payment {
		position: relative;
		background: #f5f6f7;
		text-align: center;
	}
	#form-section .form-footer-payment .btn {
		white-space: pre-wrap;
	}
	#form-section .form-footer-payment .btn span {
		display: inline-block;
	}
	#form-section .form-footer-payment #fin-logo {
		width: 180px;
		float: left;
	}
	.banner .pill + span {
		display: inline-block;
		width: 72%;
		vertical-align: middle;
	}
	#paymentpage-container .api-error-msg {
		position: absolute;
		top: -28px;
		left: 32px;
		color: #d34c4c;
		font-size: 14px;
	}
	#paymentpage-container .ql-editor {
		font-family: "Muli", "Lato", -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		color: #0d2366;
	}
	#paymentpage-container .ql-editor p {
		line-height: 20px;
		color: #515978;
	}
	#paymentpage-container .ql-editor h2 {
		line-height: 1.5em;
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 8px;
		color: #0d2366;
	}
	#paymentpage-container .ql-editor h3 {
		font-size: 1.17em;
		line-height: 24px;
		font-weight: bold;
		margin-bottom: 4px;
		color: #0d2366;
	}
	#paymentpage-container .ql-editor img,
	#paymentpage-container .ql-editor iframe {
		display: block;
		margin: 8px 0;
	}
	#paymentpage-container .ql-editor ul,
	#paymentpage-container .ql-editor ol {
		padding-left: 16px;
		margin: 8px 0;
	}
	#paymentpage-container .ql-editor ul li,
	#paymentpage-container .ql-editor ol li {
		line-height: 20px;
		margin-bottom: 10px;
		position: relative;
	}
	#paymentpage-container .ql-editor ul li::before {
		text-align: center;
		position: absolute;
		font-size: 16px;
		top: -2px;
		left: 24px;
	}
	#paymentpage-container #description-quill.ql-disabled {
		border: none;
	}
	#paymentpage-container #description-quill.ql-disabled .ql-editor {
		padding: 0;
	}
	#status-section {
		height: 100%;
		position: relative;
		background: #fff;
		min-height: 376px;
	}
	#status-section #status-section-container {
		height: 100%;
		text-align: center;
		font-size: 14px;
		color: #515978;
		line-height: 20px;
		overflow: auto;
		padding: 20px 0;
	}
	#status-section #status-section-container .title {
		margin: 20px 0;
	}
	#status-section #status-section-container .title .decimal {
		font-size: 20px;
		color: #515978;
	}
	#status-section .success-footer {
		position: relative;
		width: 100%;
	}
	#status-section #share-details {
		padding: 20px 0;
	}
	#status-section #share-details .share-icons a {
		width: 32px;
		margin: 0 8px;
	}
	#status-section #share-details .share-icons .facebook,
	#status-section #share-details .share-icons .instagram,
	#status-section #share-details .share-icons .linkedin,
	#status-section #share-details .share-icons .twitter,
	#status-section #share-details .share-icons .whatsapp {
		transform: scale(0.8);
	}
	#status-section.status-success #success-msg {
		margin-top: 8px;
		font-size: 16px;
	}
	#status-section.status-success #status-section-container {
		color: #212121;
		background-color: rgba(0,183,83,0.07);
		position: relative;
		width: 100%;
		padding: 0;
		overflow: hidden;
	}
	#status-section.status-success #status-section-container .status-content {
		position: relative;
		width: 100%;
		padding: 120px 0;
	}
	#status-section.status-success #status-section-container .custom-msg {
		color: #515978;
		padding: 0 20px;
		margin-top: 36px;
	}
	#status-section.status-success #status-section-container .redirection-msg {
		position: relative;
		display: inline-block;
		margin: 36px auto 0;
		font-size: 12px;
		color: #515978;
	}
	#status-section.status-success #status-section-container .redirection-msg::before,
	#status-section.status-success #status-section-container .redirection-msg::after {
		position: absolute;
		content: '.';
		color: inherit;
		animation: 1s blinking infinite;
		opacity: 0;
		right: -3px;
	}
	#status-section.status-success #status-section-container .redirection-msg::after {
		animation-duration: 1s;
		animation-delay: 0.2s;
		right: -6px;
	}
	#status-section.status-success #status-section-container .title {
		font-size: 24px;
		margin: 20px 0 0 0;
	}
	#status-section.status-success .success-footer {
		line-height: 20px;
		font-size: 12px;
		text-align: center;
		padding: 20px 0;
	}
	.animoo {
		position: relative;
		margin: 0 auto;
		height: 48px;
		width: 48px;
	}
	.animoo .checkmark {
		top: 0;
		left: 0;
		margin-top: 25px;
		margin-left: 12px;
		position: absolute;
		width: 0.65em;
	}
	.animoo .checkmark::after {
		content: '';
		animation: checkmark 0.4s linear forwards 0.3s;
		transform: scaleX(-1) rotate(135deg);
		opacity: 0;
		transform-origin: left top;
		border-right: 3px solid #fff;
		border-top: 3px solid #fff;
		position: absolute;
		left: 0;
		display: block;
	}
	.animoo .circle {
		height: 100%;
		width: 100%;
		border-radius: 50%;
		opacity: 0.97;
		background-color: #0b5;
		box-shadow: 0 2px 5px 0 rgba(48,51,55,0.11);
		background: linear-gradient(180deg, #00dd8c 0%, #00b753 100%);
		display: flex;
		align-items: center;
	}
	.animoo .circle::after {
		content: '';
		min-height: inherit;
		font-size: 0;
	}
	@media screen and (min-width: 0 0) and (min-resolution: 0.001dpcm) {
		.animoo .checkmark::after {
			height: 1.6em;
			width: 0.65em;
			opacity: 1;
			-ms-transform: scaleX(-1) rotate(135deg);
		}
	}
	.mountain-top {
		position: absolute;
		width: 100%;
		top: 0;
		left: 0;
	}
	.mountain-top::before {
		content: '';
		position: absolute;
		transform: rotateZ(29deg) rotateY(-45deg) rotateX(220deg);
		width: 60%;
		height: 120px;
		top: -60px;
		right: -36px;
		background: #e0f6ea;
	}
	.mountain-footer {
		position: absolute;
		width: 100%;
		bottom: 0;
		left: 0;
	}
	.mountain-footer::before,
	.mountain-footer::after {
		content: '';
		position: absolute;
		width: 96px;
		height: 96px;
		transform: rotateZ(38deg) rotateY(-25deg) rotateX(210deg);
	}
	.mountain-footer::before {
		bottom: -60px;
		left: -20px;
		background: #c7f4e1;
	}
	.mountain-footer::after {
		bottom: -80px;
		left: 32px;
		background: #00da83;
	}
	@-moz-keyframes checkmark {
		0% {
			height: 0;
			width: 0;
		}
		50% {
			height: 0;
			width: 0.65em;
			opacity: 1;
		}
		100% {
			height: 1.6em;
			width: 0.65em;
			opacity: 1;
		}
	}
	@-webkit-keyframes checkmark {
		0% {
			height: 0;
			width: 0;
		}
		50% {
			height: 0;
			width: 0.65em;
			opacity: 1;
		}
		100% {
			height: 1.6em;
			width: 0.65em;
			opacity: 1;
		}
	}
	@-o-keyframes checkmark {
		0% {
			height: 0;
			width: 0;
		}
		50% {
			height: 0;
			width: 0.65em;
			opacity: 1;
		}
		100% {
			height: 1.6em;
			width: 0.65em;
			opacity: 1;
		}
	}
	@keyframes checkmark {
		0% {
			height: 0;
			width: 0;
		}
		50% {
			height: 0;
			width: 0.65em;
			opacity: 1;
		}
		100% {
			height: 1.6em;
			width: 0.65em;
			opacity: 1;
		}
	}
	@-moz-keyframes blinking {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 1;
		}
		100% {
			opacity: 0;
		}
	}
	@-webkit-keyframes blinking {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 1;
		}
		100% {
			opacity: 0;
		}
	}
	@-o-keyframes blinking {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 1;
		}
		100% {
			opacity: 0;
		}
	}
	@keyframes blinking {
		0% {
			opacity: 0;
		}
		50% {
			opacity: 1;
		}
		100% {
			opacity: 0;
		}
	}
	#desktop-container {
		width: 100%;
		padding: 0;
		margin: 0 auto;
		/* Header details */
	}
	#desktop-container .content-container {
		min-width: 760px;
		display: table;
	}
	#desktop-container .content {
		width: calc(50% + 480px);
		position: relative;
		display: table;
		height: 100%;
		min-height: 100vh;
		max-width: 1000px;
		padding-left: 36px;
		padding-bottom: 48px;
		margin: 0 auto;
	}
	#desktop-container .content::before {
		content: '';
		position: absolute;
		height: 100%;
		width: calc(100% + (100vw - 100%) / 2 - 180px - 16px);
		left: calc(-50vw + 50%);
		border-left: 16px solid;
		border-color: #528ff0;
		background: #fcfcfc;
	}
	#desktop-container #testmodeBanner {
		margin: 0 -32px;
		top: -32px;
	}
	#desktop-container #details-view,
	#desktop-container #header-details {
		width: 42%;
	}
	#desktop-container #header-details {
		padding: 24px 0;
		color: #0d2366;
		margin: 20px 0;
		display: table;
		min-height: 112px;
	}
	#desktop-container #header-details > div {
		vertical-align: middle;
		display: inline-block;
		font-size: 18px;
	}
	#desktop-container #header-details > div:nth-of-type(n+2) {
		padding-left: 16px;
	}
	#desktop-container #header-details #merchant-name {
		font-weight: bold;
		line-height: 28px;
		max-width: 80%;
		display: inline-block;
		vertical-align: middle;
	}
	#desktop-container #header-details #header-logo {
		width: 64px;
		height: 64px;
		line-height: 62px;
		display: inline-block;
		vertical-align: middle;
	}
	#desktop-container #main-view {
		padding: 30px 32px;
		width: 480px;
		float: right;
		top: -22px;
	}
	#desktop-container #main-view.pull-up {
		top: -106px;
	}
	#desktop-container #details-view #details-section {
		display: inline-block;
		width: 100%;
	}
	#desktop-container #details-view #details-section > div {
		margin-bottom: 40px;
	}
	#desktop-container #details-view #description-details {
		white-space: normal;
	}
	#desktop-container #share-details .share-icons {
		margin-top: 8px;
	}
	#desktop-container #share-details a:not(:nth-last-child(1)) {
		margin-right: 8px;
	}
	#desktop-container #status-section {
		margin-left: -32px;
		margin-right: -32px;
	}
	#desktop-container #status-section.status-success {
		margin: -20px;
	}
	#desktop-container #status-section.status-success .status-content {
		padding: 88px 0 0;
	}
	#desktop-container #status-section.status-success #share-details {
		margin-top: 16px;
	}
	#desktop-container #form-section {
		height: 100%;
	}
	#desktop-container #form-section #form-footer {
		margin: 48px -32px -30px -32px;
	}
	#desktop-container #form-section #form-footer .form-footer-payment {
		min-height: 56px;
		padding-left: 32px;
		overflow: auto;
	}
	#desktop-container #form-section #form-footer #fin-logo {
		margin-top: 20px;
	}
	#desktop-container #form-section #form-footer .btn {
		position: relative;
		width: 180px;
		min-height: 56px;
		font-size: 16px;
		font-weight: bold;
		line-height: 20px;
		float: right;
		border-radius: 0;
		text-align: center;
		color: #fff;
	}
	@media (max-width: 1023px) {
		#paymentpage-container #desktop-container .content {
			width: calc(50% + 380px);
		}
		#paymentpage-container #desktop-container #main-view {
			width: 380px;
			top: -106px;
		}
		#paymentpage-container #desktop-container #form-section #fin-logo {
			width: 160px;
		}
	}
	@media (max-width: 960px) {
		#paymentpage-container #desktop-container .content {
			padding-left: 28px;
		}
		#paymentpage-container #desktop-container .content::before {
			border-left-width: 8px;
		}
		#paymentpage-container #desktop-container #details-view,
		#paymentpage-container #desktop-container #header-details {
			width: 45%;
		}
	}
	@media (max-width: 759px) {
		#desktop-container .content::before {
			min-width: 572px;
			left: 0;
		}
	}
	#mobile-container {
		position: relative;
		min-height: 80vh;
		width: 100%;
		margin: 0 auto;
		/* Header details */
	}
	#mobile-container .content-scrollable,
	#mobile-container .slider-view {
		padding: 32px 24px;
	}
	#mobile-container .content {
		height: 80vh;
		width: 100%;
		position: relative;
		z-index: 1;
		overflow: scroll;
	}
	#mobile-container .content .content-scrollable {
		position: absolute;
		width: 100%;
		top: 80px;
		bottom: 0;
		padding-bottom: 0;
		background: #fff;
		border-top-left-radius: 48px;
		border-top-right-radius: 48px;
	}
	#mobile-container #header-details {
		color: #0d2366;
		margin: -62px 0 20px;
		text-align: center;
	}
	#mobile-container #header-details #merchant-name {
		font-weight: bold;
		line-height: 24px;
		max-width: 80%;
		margin: 60px auto 0;
		text-align: center;
	}
	#mobile-container #header-details #header-logo {
		width: 56px;
		height: 56px;
		line-height: 62px;
	}
	#mobile-container #header-details #header-logo + #merchant-name {
		margin: 0 auto;
	}
	#mobile-container .back-btn {
		fill: #0d2366;
		background: transparent;
		outline: none;
		border: none;
		margin-left: -12px;
		padding: 4px 8px;
		vertical-align: middle;
		display: inline-block;
		line-height: 12px;
	}
	#mobile-container .slider-view {
		position: absolute;
		width: 100%;
		z-index: 2;
		overflow: auto;
		transition: all 0s 0.4s, transform 0.3s;
		transform: translateY(0);
	}
	#mobile-container .form-group .help-block {
		margin-left: 0;
	}
	#mobile-container .slideup {
		transition: all 0s, transform 0.3s;
		transform: translateY(-100%) !important;
		z-index: 2;
	}
	#mobile-container .slider-view:not(.slideup) {
		height: 0 !important;
		padding: 0;
	}
	#mobile-container .content-scrollable.ios-webview-fix #details-view {
		padding-bottom: 0;
	}
	#mobile-container .content-scrollable.ios-webview-fix .btn-container {
		margin-left: -24px;
		margin-right: -24px;
	}
	#mobile-container #details-view {
		white-space: initial;
		margin-top: 24px;
		padding-bottom: 56px;
	}
	#mobile-container #details-view.android-btn-webview {
		padding-bottom: 72px;
	}
	#mobile-container #details-view #details-section > div {
		padding: 28px 24px;
		border-bottom: 1px solid rgba(0,0,0,0.08);
		margin: 0 -24px;
		background: #fff;
	}
	#mobile-container #details-view #share-details .share-icons {
		margin-top: 16px;
	}
	#mobile-container #details-view #share-details a:not(:nth-last-child(1)) {
		margin-right: 16px;
	}
	#mobile-container .details-footer {
		width: unset;
		margin-left: -24px;
		margin-right: -24px;
		padding: 32px 24px;
		background: #f5f6f7;
		box-shadow: none;
	}
	#mobile-container .details-footer.text-center {
		text-align: center;
	}
	#mobile-container #testmodeBanner {
		margin: 0 -24px;
		top: -32px;
	}
	#mobile-container #status-section.status-success {
		margin: -24px -16px;
	}
	#mobile-container #status-section.status-success #status-section-container .status-content {
		padding: 120px 0;
		min-height: 97.5vh;
	}
	#mobile-container #status-section.status-success #share-details {
		margin-top: 28px;
	}
	#mobile-container #status-section.status-success .details-footer {
		position: absolute;
		bottom: 12px;
		text-align: center;
		padding: 24px 40px;
		background: transparent;
		color: #58666e;
	}
	#mobile-container .btn-container {
		position: relative;
	}
	#mobile-container .btn--fixed,
	#mobile-container .btn--full,
	#mobile-container .btn--floating {
		padding: 18px;
		font-size: 16px;
		font-weight: bold;
		border-radius: 0;
	}
	#mobile-container .btn--floating {
		position: fixed;
		padding: 16px;
		width: 92%;
		bottom: 36px;
		left: 4%;
		border-radius: 2px;
		box-shadow: 0 0 15px rgba(0,0,0,0.3);
	}
	#mobile-container .btn--fixed {
		position: fixed;
		bottom: 0;
		width: 100%;
		left: 0;
	}
	#mobile-container #form-section.android-webview {
		padding-bottom: 90px;
	}
	#mobile-container #form-section #form-footer {
		margin: 48px -24px -30px -24px;
	}
	#mobile-container #form-section #form-footer .form-footer-payment {
		height: 80px;
		padding: 0 24px;
	}
	#mobile-container #form-section #form-footer #fin-logo {
		margin-top: 32px;
	}
	#mobile-container #form-section #form-footer #rzp-logo {
		float: right;
		margin-top: 32px;
		width: 76px;
	}
	#mobile-container #form-section #form-footer:not(.ios-safari-fix) .btn {
		margin-top: 80px;
		position: absolute;
		left: 0;
		right: 0;
	}
</style>
<title>Educorner pay</title>
<link rel="stylesheet" href="https://cdn.razorpay.com/static/assets/social-share/icons.css">
<link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css">
<script type="text/javascript" src="https://cdn.quilljs.com/1.3.6/quill.min.js" onload="window.onQuillLoad &amp;&amp; window.onQuillLoad()"></script><style id="preset_style" type="text/css">
	#paymentpage-container .btn {
		background-color: rgb(35,113,236);
		color: #fff !important
	}

	#paymentpage-container .Field--counter button {
		color: rgb(35,113,236);

	}

	#paymentpage-container .Field--CheckBox [type="checkbox"]:checked + .CheckBox-mark {
		background-color: rgb(35,113,236);
	}

	#paymentpage-container .Field.Field--CheckBox .CheckBox-mark::after {
		border-color: #fff;
	}

	#paymentpage-container .title-underline {
		border-color: rgb(35,113,236);
	}

	#paymentpage-container #desktop-container .content-container .content::before {
		border-color: rgb(35,113,236);
	}
</style>
<meta name="theme-color" content="rgb(35,113,236)">
</head>

<body class="theme-desktop dark" style="">
	<div id="paymentpage-container" >

		<div id="desktop-container" >
			<div class="content-container" >
				<div class="content" >
					<div id="header-details">
						
					</div>
					<div data-view-id="1" id="main-view" class="slider-view">
						<div id="testmodeBanner" class="banner">
							<span class="pill pill--yellow" style="margin-right: 10px;">Test Mode</span>            
							<span>Only test payments can be made for this payment page.</span>
						</div>

						<div class="title">
							<a slot="before" href="#" class="back-btn" type="button"></a>
							Payment Details
							<div class="title-underline"></div>
						</div>

						<div id="form-section" class="">
							<form class="UI-form " novalidate="">
								<div>									
									<div class="Field Field--required Field--amount Field--amount--selected 
									Field--currency-1 ">
									<div class="Field-label">Amount</div>
									<div class="Field-content">
										<div class="Field-wrapper">
											<span class="Field-addon Field-addon--before">
												<span><b class="currency-symbol">₹</b></span>
											</span>
											<div class="Field-el">
												<label><b><?php echo $_SESSION['fees'];?></b></label>
											</div>
											<span class="Field-addon Field-addon--after "></span>
										</div>
										<div class="Field-error"></div>
										<div class="Field-description"></div>
									</div>
								</div>

								<div class="Field Field--required">
									<div class="Field-label">Email</div>
									<div class="Field-content">
										<div class="Field-wrapper">
											<span class="Field-addon "></span>
											<input class="Field-el" name="email" required="" type="text" disabled="" value="<?php echo $_SESSION['email'];?>">
											<span class="Field-addon "></span>
										</div>
										<div class="Field-error"></div>
										<div class="Field-description"></div>
									</div>
								</div>

								
							</div>
						</form>
						<div slot="after">
							<div id="form-footer" class="">



								<div class="form-footer-payment">
									<img id="fin-logo" alt="pay-methods" src="https://cdn.razorpay.com/static/assets/pay_methods_branding.png">
									<button type="button" class="btn btn--gradient" id="rzp-button1" onclick="pay(<?php echo $_SESSION['fees'];?>)">Pay <span style="margin-left: 4px;">₹ <?php echo $_SESSION['fees'];?></span></button>


									
								</div>
							</div>
						</div>
					</div>
				</div>


				



				<div id="details-view" class="">
					<div id="details-section">
						<div id="description-details">
							<div class="title title--big">Edu Corner
								<div class="title-underline"></div>
							</div>

							<div id="description" class="details-value text-wrap" style="white-space: normal;">
								<div id="description-quill" class="ql-container ql-snow ql-disabled">
									<div class="ql-editor" data-gramm="false" contenteditable="false"> 
										<h2>User Name </h2><p style="text-transform: capitalize;"><?php echo $user['fName'].' '.$user['lName'];?></p><p><br></p>
									</div>
									<div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
								</div>
							</div>
						</div>        


					</div>

					<div class="details-footer ">
						<img id="rzp-logo" alt="rzp-logo" src="https://cdn.razorpay.com/logo.svg">
						<div>Want to create payment pages for your business? Visit <a href="https://razorpay.com/payment-pages/?utm_source=hostedpage&amp;utm_medium=footer&amp;utm_campaign=paymentpage" target="_blank">Razorpay Payment Pages</a> and get started!</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<div class="razorpay-container" style="z-index: 1000000000; position: fixed; top: 0px; display: none; left: 0px; height: 100%; width: 100%; backface-visibility: hidden; overflow-y: visible;">
	<style>@keyframes rzp-rot{to{transform: rotate(360deg);}}@-webkit-keyframes rzp-rot{to{-webkit-transform: rotate(360deg);}}</style>
	<div class="razorpay-backdrop" style="min-height: 100%; transition: all 0.3s ease-out 0s; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;">
		<span style="text-decoration: none; background: rgb(214, 68, 68); border: 1px dashed white; padding: 3px; opacity: 0; transform: rotate(45deg); transition: opacity 0.3s ease-in 0s; font-family: lato, ubuntu, helvetica, sans-serif; color: white; position: absolute; width: 200px; text-align: center; right: -50px; top: 50px;">Test Mode</span>
	</div>
	<iframe style="opacity: 1; height: 100%; position: relative; background: none; display: block; border: 0px none transparent; margin: 0px; padding: 0px; z-index: 2; width: 100%;" allowtransparency="true" frameborder="0" width="100%" height="100%" allowpaymentrequest="true" src="https://api.razorpay.com/v1/checkout/public" class="razorpay-checkout-frame"></iframe>
</div>




</body>
</html>
