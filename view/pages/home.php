<?php
    //Access Control
    if(isset($_SESSION['username'])){
        header('Location: member');
        exit();
    }
?>
<style>
    .ui.header{
        padding-top:1em;
    }
</style>

<div class="ui inverted vertical masthead center aligned segment hero">
    <div class="ui text container">
    <h1 class="ui inverted header">
        Ukraine International Airlines
    </h1>
    <h2>Fly Everywhere As You Want</h2>
        <a href="/signup" class="ui huge primary button">Fly Now</a>
    </div>
</div>

<div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
    <div class="row">
        <div class="eight wide column">
        <h3 class="ui header">Inflight Offering</h3>
        <p>
            Get a taste of Ukraine hospitality and feel at ease when flying with Ukraine International Airlines. Enjoy the latest movies, TV programmes, games and music with our inflight entertainment. Indulge in tasty inflight meals or do a little inflight duty free shopping to kick start your journey.
        </p>
        <h3 class="ui header">In-flight Services</h3>
        <p>
            We pride ourselves in providing the services you need during the flight. 
            Offering you essential and up to date technologies such as USB charging ports and in-flight WiFi.
            Our flight attendants are among the best in the world and will help with anything you need during your flight.
        </p>
        </div>
        <div class="six wide right floated column">
        <img src="/img/plane.png" class="ui large bordered rounded image"/>
        </div>
    </div>
    </div>
</div>

<div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
    <div class="ui middle aligned stackable grid container">
	<div class="row">
        <div class="five wide column">
        <img src="/img/award.jpg" class="ui large bordered rounded image">
        </div>
        <div class="nine wide right floated column">
        <h2>Awards</h2>
        <p>
            <b>&#8226; &nbsp&nbsp&nbsp; The Cellars in the Sky 2016 Awards</b>
			<br>
			<br>
			<b>&#8226; &nbsp&nbsp&nbsp; IATA'S Fast Travel Programme</b>
			<br>
			<br>
			<b>&#8226; &nbsp&nbsp&nbsp; TTG Travel Awards 2017</b>
			<br>
			<br>
			<b>&#8226; &nbsp&nbsp&nbsp; Best Airlines Meal Year 2016 Award</b>
        </p>
        </div>
	</div>
	</div>
	</div>
</div>