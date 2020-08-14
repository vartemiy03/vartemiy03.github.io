<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: "Calibri Light", Helvetica, sans-serif;
		}
		body {
			font-size: 32px;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background: lightgoldenrodyellow;
		}
		div {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		h1 {
			padding-bottom: 2rem;
		}
		label {
			padding-bottom: 1rem;
		}
		div div {
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			position: relative;
			overflow: hidden;
			margin-top: 5px;
		}
		div div input {
			width: 34ch;
			padding: 7px 3px;
			margin-right: 25px;
			font-size: 1.2rem;

			outline: none;
			border: none;
			border-bottom: 2px solid lightskyblue;
			background: #00000000;
		}
		#q {			
			width: 34ch;
			height: 2px;
			font-size: 1.2rem;
			
			position: absolute;
			bottom: 0rem;
			left: calc(-100% + 78px);
			
			background: BurlyWood;		
			transition: .5s all;
		}
		input:focus + #q {
			left: 0;
		}
		div button {
			font-size: 1.2rem;
			padding: 8px 1rem;
			background: lightskyblue;
			border: none;
			outline: none;
			cursor: pointer;
		}
		div button:hover {
			background: BurlyWood;
			color: #f8f8f8
		}
	</style>
</head>
<body>
	<div>
		<h1>Hi there!</h1>
		<label for="oof">What do you think about the situation?</label>
		<div>
			<input type="text" placeholder="cool" id="oof">
			<span id="q"></span>
			<button onclick="alert('hello world');">oof</button>
		</div>
	</div>
</body>
</html>
