@extends('layouts.master')

@section('title', '| Guest Index')

@section('content')



<div class="x3-background_animated1"></div>

<p>table responsive</p>
<div class="x3-table table-responsive">
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Button</th>
				<th>check 1</th>
				<th>check 2</th>
				<th>check 3</th>
				<th>check 4</th>
				<th>check 5</th>
				<th>check 6</th>
				<th>check 7</th>
				<th>check 8</th>
				<th>check 9</th>
				<th>check 10</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>floating action primary</td>
				<td><button type="button" class="x3-button button-floating_action-primary"><i class="fa fa-plus"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
			</tr>
			<tr>
				<td>floating action accent</td>
				<td><button type="button" class="x3-button button-floating_action-accent"><i class="fa fa-plus"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
			</tr>
			<tr>
				<td>floating action disabled</td>
				<td><button type="button" class="x3-button button-floating_action" disabled><i class="fa fa-plus"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
			</tr>
		</tbody>
	</table>
</div>

<p>table strip</p>
<div class="x3-table table-strip">
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Button</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>raised primary normal</td>
				<td><button type="button" class="x3-button button-raised-primary-normal">BUTTON</button></td>
			</tr>
			<tr>
				<td>raised accent normal</td>
				<td><button type="button" class="x3-button button-raised-accent-normal">BUTTON</button></td>
			</tr>
			<tr>
				<td>raised primary outline</td>
				<td><button type="button" class="x3-button button-raised-primary-outline">BUTTON</button></td>
			</tr>
			<tr>
				<td>raised accent outline</td>
				<td><button type="button" class="x3-button button-raised-accent-outline">BUTTON</button></td>
			</tr>
			<tr>
				<td>raised disabled</td>
				<td><button type="button" class="x3-button button-raised" disabled>BUTTON</button></td>
			</tr>
		</tbody>
	</table>
</div>

<p>table hover</p>
<div class="x3-table table-hover">
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Button</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>flat primary</td>
				<td><button type="button" class="x3-button button-flat-primary">BUTTON</button></td>
			</tr>
			<tr>
				<td>flat accent</td>
				<td><button type="button" class="x3-button button-flat-accent">BUTTON</button></td>
			</tr>
			<tr>
				<td>flat disabled</td>
				<td><button type="button" class="x3-button button-flat" disabled>BUTTON</button></td>
			</tr>
		</tbody>
	</table>
</div>

<p>table border</p>
<div class="x3-table table-border">
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Button</th>
				<th>check 1</th>
				<th>check 2</th>
				<th>check 3</th>
				<th>check 4</th>
				<th>check 5</th>
				<th>check 6</th>
				<th>check 7</th>
				<th>check 8</th>
				<th>check 9</th>
				<th>check 10</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>nav primary</td>
				<td><button type="button" class="x3-button button-nav-primary"><i class="fa fa-navicon"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
			</tr>
			<tr>
				<td>nav accent</td>
				<td><button type="button" class="x3-button button-nav-accent"><i class="fa fa-navicon"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
			</tr>
			<tr>
				<td>nav disabled</td>
				<td><button type="button" class="x3-button button-nav" disabled><i class="fa fa-navicon"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
			</tr>
		</tbody>
	</table>
</div>

<p>table (responsive, strip, hover)</p>
<div class="x3-table table-responsive table-strip table-hover">
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Button</th>
				<th>check 1</th>
				<th>check 2</th>
				<th>check 3</th>
				<th>check 4</th>
				<th>check 5</th>
				<th>check 6</th>
				<th>check 7</th>
				<th>check 8</th>
				<th>check 9</th>
				<th>check 10</th>
				<th>check 11</th>
				<th>check 12</th>
				<th>check 13</th>
				<th>check 14</th>
				<th>check 15</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>menu normal primary</td>
				<td>
					<div class="x3-menu_dropdown">
						<button type="button" class="x3-button button-menu_normal-primary">MENU <i class="fa fa-caret-down"></i></button>
						<div class="menu_dropdown-content">
							<a href="#">link 1a</a>
							<a href="#">link 2a</a>
							<a href="#"><i class="fa fa-plus"></i> link 3a</a>
						</div>
					</div>
				</td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
				<td>check 11</td>
				<td>check 12</td>
				<td>check 13</td>
				<td>check 14</td>
				<td>check 15</td>
			</tr>
			<tr>
				<td>menu normal accent</td>
				<td>
					<div class="x3-menu_dropdown">
						<button type="button" class="x3-button button-menu_normal-accent">MENU <i class="fa fa-caret-down"></i></button>
						<div class="menu_dropdown-content menu_dropdown-content-right">
							<a href="#">link 1b</a>
							<a href="#">link 2b</a>
							<hr />
							<a href="#">link 3b</a>
						</div>
					</div>
				</td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
				<td>check 11</td>
				<td>check 12</td>
				<td>check 13</td>
				<td>check 14</td>
				<td>check 15</td>
			</tr>
			<tr>
				<td>menu normal disabled</td>
				<td><button type="button" class="x3-button button-menu_normal" disabled>MENU <i class="fa fa-caret-down"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
				<td>check 11</td>
				<td>check 12</td>
				<td>check 13</td>
				<td>check 14</td>
				<td>check 15</td>
			</tr>
			<tr>
				<td>menu icon primary</td>
				<td><button type="button" class="x3-button button-menu_icon-primary"><i class="fa fa-ellipsis-v"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
				<td>check 11</td>
				<td>check 12</td>
				<td>check 13</td>
				<td>check 14</td>
				<td>check 15</td>
			</tr>
			<tr>
				<td>menu icon accent</td>
				<td><button type="button" class="x3-button button-menu_icon-accent"><i class="fa fa-ellipsis-v"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
				<td>check 11</td>
				<td>check 12</td>
				<td>check 13</td>
				<td>check 14</td>
				<td>check 15</td>
			</tr>
			<tr>
				<td>menu icon disabled</td>
				<td><button type="button" class="x3-button button-menu_icon" disabled><i class="fa fa-ellipsis-v"></i></button></td>
				<td>check 1</td>
				<td>check 2</td>
				<td>check 3</td>
				<td>check 4</td>
				<td>check 5</td>
				<td>check 6</td>
				<td>check 7</td>
				<td>check 8</td>
				<td>check 9</td>
				<td>check 10</td>
				<td>check 11</td>
				<td>check 12</td>
				<td>check 13</td>
				<td>check 14</td>
				<td>check 15</td>
			</tr>
		</tbody>
	</table>
</div>

<p>table</p>
<div>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Button</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>gradient primary</td>
				<td><button type="button" class="x3-button button-gradient-primary">BUTTON</button></td>
			</tr>
			<tr>
				<td>gradient accent</td>
				<td><button type="button" class="x3-button button-gradient-accent">BUTTON</button></td>
			</tr>
			<tr>
				<td>gradient disabled</td>
				<td><button type="button" class="x3-button button-gradient" disabled>BUTTON a w</button></td>
			</tr>
		</tbody>
	</table>
</div>





<div class="x3-containerx">
	<p>Paragraph</p>
	<h1>Heading 1</h1>
	<h2>Heading 2</h2>
	<h3>Heading 3</h3>
	<h4>Heading 4</h4>
	<h5>Heading 5</h5>
	<h6>Heading 6</h6>
	<a href="#">Link</a>
	<strong>Strong</strong>
	<b>Bold</b>
	<em>Emphasis</em>
	<i>Italic</i>
	<u>Underline</u>
	<small>Small</small>
	<strike>Strike</strike>
	<s>Strikethrough</s>
	<span>Span</span>
	<sub>Subscript</sub>
	<sup>Superscript</sup>
	<form action="#">
		<input type="text" placeholder="text" />
		<input type="checkbox" />
		<input type="radio" />
		<input type="button" />
		<input type="submit" />
		<input type="search" />
		<input type="password" placeholder="password" />
		<input type="email" placeholder="email" />
		<input type="date" />
		<input type="time" />
		<input type="number" placeholder="number" />
		<input type="range" />
		<input type="color" />
		<input type="hidden" />
		<label for="#">Label</label>
		<select name="#" id="#">Select</select>
		<textarea name="#" id="#" cols="30" rows="10">Textarea</textarea>
		<button>Button</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>TH 1</th>
				<th>TH 2</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>TR 1 TD 1</td>
				<td>TR 1 TD 2</td>
			</tr>
			<tr>
				<td>TR 2 TD 1</td>
				<td>TR 2 TD 2</td>
			</tr>
		</tbody>
	</table>

	<br />
	<hr />

<!--
	components
		card
		dropdown
		menu
		modal (modal dialog)
		navbar (toolbar)
		progress (loading)
		snackbar (alert)
		tabs
		sidebar (toolbar drawer)
		button
		input
		slevation (shadows and elevation)
	elements
		list
		button
		form
			input text
			textarea
			input checkbox
			input radio
			input email
			input number
			input password
			select
			input date
			input time
			input search
		table
		title
		subtitle
-->

<!--  -->

	<div class="x3-box-1">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<button style="width:100px; height:100px;">Button</button>
	</div>

	<div class="x3-box-2">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div class="x3-box-3">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

@endsection