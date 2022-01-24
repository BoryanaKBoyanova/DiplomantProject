@extends('layout')

@section('content')
    <header style="max-width:1500px; margin-top:60px" class="w3-display-container w3-content w3-wide" id="home">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-indigo w3-opacity-min"><b>Diplomant's</b></span> <span class="w3-hide-small w3-text-black">projects</span></h1>
        </div>
    </header>

    <div class="w3-container w3-padding-32" id="projects">
        <h3 style="color:black; font-family: Verdana;" class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
    </div>
    <!-- edit photos -->
    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Spring poster</div>
                <img src="images/project3.jpg" alt="project3" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Cover</div>
                <img src="images/project2.jpg" alt="project2" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Ecology</div>
                <img src="images/project4.jpg" alt="project4" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Programming Poster</div>
                <img src="images/project5.jpg" alt="project5" style="width:99%">
            </div>
        </div>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Ecology 2</div>
                <img src="/images/project6.jpg" alt="project6" style="width:95%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">24th of May</div>
                <img src="/images/project7.jpg" alt="project7" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Graphics</div>
                <img src="/images/project8.jpg" alt="project8" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Violet Mix</div>
                <img src="/images/project9.jpg" alt="project9" style="width:79%">
            </div>
        </div>
    </div>
@endsection


