@include('layouts.head')

<div style="position: absolute;margin-top: -55px;width: 100%;">
	<ul class='nav-li'> 
		<li> 
			<i class="fa fa-bars" aria-hidden="true"> </i> &nbsp; Mindanao Status 
			<ul class='nav-li-li'>
				<li> <a href="{{ route('page1') }}"/> Distribution of Ongoing ODA Programs and Projects (PAPs) in Mindanao, by DONOR AGENCY </a> </li>
				<li> <a href="{{ route('page2') }}" style='font-weight: bold;'/> Distribution of Ongoing ODA Programs and Projects in Mindanao, by REGION </a> </li>
				<li> <a href="{{ route('page3') }}"/> Number of On-going ODA Programs and Projects in Mindanao, by sector </a> </li>
				<li> <a href="{{ route('page4') }}"/> Percentage of On-going ODA Programs and Projects in Mindanao, by sector </a> </li>
				<li> <a href="{{ route('page5') }}"/> Percent Share of Ongoing ODA Programs and Projects in Mindanao, by Type of Assistance </a> </li>
				<li> <a href="{{ route('page6') }}"/> Percent Share of Ongoing ODA Programs and Projects in Mindanao, by Type of Assistance </a> </li>
				<li> <a href="{{ route('page7') }}"/> Percent Share of Ongoing ODA Programs and Projects in Mindanao, by GRANT AMOUNT </a> </li>
				<li> <a href="{{ route('page8') }}"/> Percent Share of Ongoing ODA Programs and Projects in Mindanao, by LOAN AMOUNT </a> </li>
			</ul>
		</li>
	</ul>
</div>
<br/>
<div style="margin-top: 50px;">
	<img src="{{ asset('/minda_images/neda/2.png') }}" style="width: 1355px;"/>
</div>	