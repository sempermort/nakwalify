@extends('layouts.user-layout')

@section('content')
<style>
@mixin margin-auto {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
}

body {
    font-family: 'Comfortaa', sans-serif;
    background: #111;
}

.main-wrapper {
    width: 90%;
    max-width: 900px;
    margin: 3em auto;
    text-align: center;
}

.badge {
    position: relative;
    margin: 1.5em 3em;
    width: 4em;
    height: 6.2em;
    border-radius: 10px;
    display: inline-block;
    top: 0;
    transition: all 0.2s ease;
}
    &:before,
    &:after {
        position: absolute;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        background: inherit;
        content: "";
       margin:auto;
    }

    &:before {
        transform: rotate(60deg);
    }

    &:after {
        transform: rotate(-60deg);
    }

    &:hover {
        top: -4px;
    }

    .circle {
        width: 60px;
        height: 60px;
        position: absolute;
        background: #fff;
        z-index: 10;
        border-radius: 50%;
         margin:auto;
    }
        i.fa {
            font-size: 2em;
            margin-top: 8px;
        }
    

    .font {
        display: inline-block;
        margin-top: 1em;
    }

    .ribbon {
        position: absolute;
        border-radius: 4px;
        padding: 5px 5px 4px;
        width: 100px;
        z-index: 11;
        color: #fff;
        bottom: 12px;
        left: 50%;
        margin-left: -55px;
        height: 15px;
        font-size: 14px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.27);
        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
        text-transform: uppercase;
        background: linear-gradient(to bottom right, #555 0%, #333 100%);
        cursor: default;
    }


.yellow {
    background: linear-gradient(to bottom right, #ffeb3b 0%, #fbc02d 100%);
    color: #ffb300;
}

.orange {
    background: linear-gradient(to bottom right, #ffc107 0%, #f57c00 100%);
    color: #f68401;
}

.pink {
    background: linear-gradient(to bottom right, #F48FB1 0%, #d81b60 100%);
    color: #dc306f;
}

.red {
    background: linear-gradient(to bottom right, #f4511e 0%, #b71c1c 100%);
    color: #c62828;
}

.purple {
    background: linear-gradient(to bottom right, #ab47bc 0%, #4527a0 100%);
    color: #7127a8;
}

.teal {
    background: linear-gradient(to bottom right, #4DB6AC 0%, #00796B 100%);
    color: #34a297;
}

.blue {
    background: linear-gradient(to bottom right, #4FC3F7 0%, #2196F3 100%);
    color: #259af3;
}

.blue-dark {
    background: linear-gradient(to bottom right, #1976D2 0%, #283593 100%);
    color: #1c68c5;
}

.green {
    background: linear-gradient(to bottom right, #cddc39 0%, #8bc34a 100%);
    color: #7cb342;
}

.green-dark {
    background: linear-gradient(to bottom right, #4CAF50 0%, #1B5E20 100%);
    color: #00944a;
}

.silver {
    background: linear-gradient(to bottom right, #E0E0E0 0%, #BDBDBD 100%);
    color: #9e9e9e;
}

.gold {
    background: linear-gradient(to bottom right, #e6ce6a 0%, #b7892b 100%);
    color: #b7892b;
}


footer {
    text-align: center;
    margin: 5em auto;
}
   
        &:hover {
            background: #222;
        }

        .icons {
            margin-top: 12px;
            display: inline-block;
            font-size: 20px;
        }
     </style>

<div class="main-wrapper">
    <div class="badge yellow">
        <div class="circle"> <i class="fa fa-bolt"></i></div>
        <div class="ribbon">Initiator</div>
    </div>
    <div class="badge orange">
        <div class="circle"> <i class="fa fa-wheelchair-alt"></i></div>
        <div class="ribbon">Disabler</div>
    </div>
    <div class="badge pink">
        <div class="circle"> <i class="fa fa-pied-piper"></i></div>
        <div class="ribbon">Nuker</div>
    </div>
    <div class="badge red">
        <div class="circle"> <i class="fa fa-shield"></i></div>
        <div class="ribbon">Ganker</div>
    </div>
    <div class="badge purple">
        <div class="circle"> <i class="fa fa-anchor"></i></div>
        <div class="ribbon">Durable</div>
    </div>
    <div class="badge teal">
        <div class="circle"> <i class="fa fa-bicycle"></i></div>
        <div class="ribbon">Roamer</div>
    </div>
    <div class="badge blue">
        <div class="circle"> <i class="fa fa-users"></i></div>
        <div class="ribbon">Pusher</div>
    </div>
    <div class="badge blue-dark">
        <div class="circle"> <i class="fa fa-rocket"></i></div>
        <div class="ribbon">Escape</div>
    </div>
    <div class="badge green">
        <div class="circle"> <i class="fa fa-tree"></i></div>
        <div class="ribbon">Jungler</div>
    </div>
    <div class="badge green-dark">
        <div class="circle"> <i class="fa fa-user fa-street-view"></i></div>
        <div class="ribbon">Offlaner</div>
    </div>
    <div class="badge silver">
        <div class="circle"> <span class="font">AFK</span></div>
        <div class="ribbon">Carry</div>
    </div>
    <div class="badge gold">
        <div class="circle"> <i class="fa fa-magic"></i></div>
        <div class="ribbon">Support</div>
    </div>
</div>

@endsection