<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            * {
                list-style: none;
                font-family: 'Courier New', Courier, monospace;
            }

            .site-plan {
                position: relative;
            }

            tr {
                padding: 2px;
            }
            td {
                border-radius: 10px;
                border: 1px solid black;
                background: yellow;
            }
            li {
                color: black;
                font-size: 12px;
                font-weight: 800;
            }

            .A3,
            .A5 tr td li {
                text-align: center;
            }

            .A11,
            .A14,
            .A21,
            .A22,
            .A27,
            .A33 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .B16,
            .B19,
            .B32,
            .B61,
            .B69 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .C10,
            .C15,
            .C26,
            .C33 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .D5,
            .D12,
            .D26,
            .D30,
            .D32,
            .D16 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .E1,
            .E2,
            .E18,
            .E21 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .F1,
            .F2,
            .F18,
            .F21 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .G1,
            .G2,
            .G14,
            .G17 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .I1,
            .I2,
            .I20 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .J1 tr td li {
                line-height: 10px;
                text-align: center;
            }

            .X1 tr td li {
                line-height: 10px;
                text-align: center;
                padding: 4px;
            }

            .X1 {
                -webkit-border-horizontal-spacing: 10px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 78%;
                left: 14.8%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .X2 tr td li {
                line-height: 10px;
                text-align: center;
                padding: 4px;
            }

            .X2 {
                -webkit-border-horizontal-spacing: 10px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 76.8%;
                left: 16.5%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .X3 tr td li {
                line-height: 10px;
                text-align: center;
                padding: 2px;
            }

            .X3 {
                -webkit-border-horizontal-spacing: 9px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 50.2%;
                left: 18%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .X4 tr td li {
                line-height: 10px;
                text-align: center;
                padding: 2px;
            }

            .X4 {
                -webkit-border-horizontal-spacing: 9px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 25%;
                left: 20.5%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .X5 tr td li {
                line-height: 10px;
                text-align: center;
                padding: 2px;
            }

            .X5 {
                -webkit-border-horizontal-spacing: 9px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 52.2%;
                left: 19.2%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .X6 tr td li {
                line-height: 10px;
                text-align: center;
                padding: 2px;
            }

            .X6 {
                -webkit-border-horizontal-spacing: 9px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 25.9%;
                left: 21%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 60.5%;
                left: 27.8%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 71.5%;
                left: 26.3%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A5 {
                -webkit-border-horizontal-spacing: 5px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 65%;
                left: 33%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A11 {
                -webkit-border-horizontal-spacing: 5px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 67%;
                left: 40.5%;
                transform: rotate(12deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A21 {
                -webkit-border-horizontal-spacing: 5px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 69.3%;
                left: 48%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A27 {
                -webkit-border-horizontal-spacing: 5px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 72%;
                left: 56%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A33 {
                -webkit-border-horizontal-spacing: 5px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 74%;
                left: 63.5%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A6 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 72%;
                left: 30.7%;
                transform: rotate(14deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A14 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 73.8%;
                left: 38.8%;
                transform: rotate(14deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .A22 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 78.5%;
                left: 47.2%;
                transform: rotate(12deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 81%;
                left: 20%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 81.5%;
                left: 25%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B16 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 53.7%;
                left: 29.8%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B19 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 36%;
                left: 16.8%;
                transform: rotate(-77deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B32 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 22.4%;
                left: 26.2%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B61 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 6.8%;
                left: 33%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .B69 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 2.5%;
                left: 36.2%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .C1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 81%;
                left: 29%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .C2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 80.3%;
                left: 36.5%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .C10 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 56%;
                left: 37.5%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .C26 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 24.8%;
                left: 33.8%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .C33 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 22.5%;
                left: 28%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .C15 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 54.5%;
                left: 32%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 79%;
                left: 41%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 87.5%;
                left: 46%;
                transform: rotate(13deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D5 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 82%;
                left: 46.6%;
                transform: rotate(12deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D10 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 91.5%;
                left: 49.2%;
                transform: rotate(12deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D12 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 93.7%;
                left: 53.5%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D16 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 90%;
                left: 53.8%;
                transform: rotate(12deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D26 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 94.7%;
                left: 55.9%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D30 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 96%;
                left: 61.5%;
                transform: rotate(102deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .D32 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 92%;
                left: 61.5%;
                transform: rotate(12deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .E1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 56.8%;
                left: 39.5%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .E2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 58.6%;
                left: 45%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .E18 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 22.5%;
                left: 42.5%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .E21 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 25.5%;
                left: 36.3%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .F1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 59.3%;
                left: 47.3%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .F2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 61.2%;
                left: 53%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .F18 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 28.4%;
                left: 48.8%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .F21 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 22%;
                left: 44%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .G1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 61.8%;
                left: 55%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .G2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 65.2%;
                left: 61.5%;
                transform: rotate(-78deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .G14 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 30.8%;
                left: 56.4%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .G17 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 29.2%;
                left: 51.4%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .H2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 57.7%;
                left: 65.8%;
                transform: rotate(10deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .I1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 31%;
                left: 58.5%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .I2 {
                -webkit-border-horizontal-spacing: 4px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 34%;
                left: 72.5%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .I20 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 20%;
                left: 78.8%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .J1 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 28%;
                left: 76.8%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .J2 {
                -webkit-border-horizontal-spacing: 2px;
                /* -webkit-border-vertical-spacing: 10px; */
                position: absolute;
                top: 27%;
                left: 86%;
                transform: rotate(-77.5deg);
                cursor: pointer;
                border: none;
                border-color: black;
                outline: none;
            }

            .imgs {
                height: 100%;
                width: 100%;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div class="site-plan" style="min-width:1366px;max-width:1366px;position:relative">
            <img src="../../sitesplan.png" alt="" class="imgs"/>
            <table class="X1">
                <tr>
                    <td><li class="button-li">1</li></td>
                    <td><li class="button-li">3</li></td>
                    <td><li class="button-li">5</li></td>
                    <td><li class="button-li">7</li></td>
                    <td><li class="button-li">9</li></td>
                    <td><li class="button-li">11</li></td>
                </tr>
            </table>
            <table class="X2">
                <tr>
                    <td><li class="button-li">2</li></td>
                    <td><li class="button-li">4</li></td>
                    <td><li class="button-li">6</li></td>
                    <td><li class="button-li">8</li></td>
                    <td><li class="button-li">10</li></td>
                    <td><li class="button-li">12</li></td>
                </tr>
            </table>
            <table class="X3">
                <tr>
                    <td><li class="button-li">15</li></td>
                    <td><li class="button-li">18</li></td>
                    <td><li class="button-li">20</li></td>
                    <td><li class="button-li">22</li></td>
                    <td><li class="button-li">24</li></td>
                    <td><li class="button-li">26</li></td>
                    <td><li class="button-li">28</li></td>
                </tr>
            </table>
            <table class="X4">
                <tr>
                    <td><li class="button-li">30</li></td>
                    <td><li class="button-li">32</li></td>
                    <td><li class="button-li">34</li></td>
                    <td><li class="button-li">36</li></td>
                    <td><li class="button-li">38</li></td>
                    <td><li class="button-li">40</li></td>
                    <td><li class="button-li">42</li></td>
                    <td><li class="button-li">44</li></td>
                </tr>
            </table>
            <table class="X5">
                <tr>
                    <td><li class="button-li">14</li></td>
                    <td><li class="button-li">16</li></td>
                    <td><li class="button-li">19</li></td>
                    <td><li class="button-li">21</li></td>
                    <td><li class="button-li">23</li></td>
                    <td><li class="button-li">25</li></td>
                    <td><li class="button-li">27</li></td>
                </tr>
            </table>
            <table class="X6">
                <tr>
                    <td><li class="button-li">29</li></td>
                    <td><li class="button-li">31</li></td>
                    <td><li class="button-li">33</li></td>
                    <td><li class="button-li">35</li></td>
                    <td><li class="button-li">37</li></td>
                    <td><li class="button-li">39</li></td>
                    <td><li class="button-li">41</li></td>
                    <td><li class="button-li">43</li></td>
                    <td><li class="button-li">45</li></td>
                </tr>
            </table>
            <!-- BLOK A -->
            <table class="A1">
                <tr>
                    <td><li class="button-li">A1</li></td>
                    <td><li class="button-li">A3</li></td>
                </tr>
            </table>
            <table class="A2">
                <tr>
                    <td><li class="button-li">A2</li></td>
                    <td><li class="button-li">A4</li></td>
                </tr>
            </table>
            <table class="A5">
                <tr>
                    <td><li class="button-li">A5</li></td>
                    <td><li class="button-li">A7</li></td>
                    <td><li class="button-li">A9</li></td>
                </tr>
            </table>
            <table class="A11">
                <tr>
                    <td>
                        <li class="button-li">A<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />19</li>
                    </td>
                </tr>
            </table>
            <table class="A21">
                <tr>
                    <td>
                        <li class="button-li">A<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />25</li>
                    </td>
                </tr>
            </table>
            <table class="A27">
                <tr>
                    <td>
                        <li class="button-li">A<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />31</li>
                    </td>
                </tr>
            </table>
            <table class="A33">
                <tr>
                    <td>
                        <li class="button-li">A<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />35</li>
                    </td>
                </tr>
            </table>
            <table class="A6">
                <tr>
                    <td><li class="button-li">A6</li></td>
                    <td><li class="button-li">A8</li></td>
                    <td><li class="button-li">A10</li></td>
                    <td><li class="button-li">A12</li></td>
                </tr>
            </table>
            <table class="A14">
                <tr>
                    <td>
                        <li class="button-li">A<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />16</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />20</li>
                    </td>
                </tr>
            </table>
            <table class="A22">
                <tr>
                    <td>
                        <li class="button-li">A<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />24</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />28</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />30</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />34</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />38</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />40</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />42</li>
                    </td>
                    <td>
                        <li class="button-li">A<br />44</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK B -->
            <table class="B1">
                <tr>
                    <td><li class="button-li">B1</li></td> 
                    <td><li class="button-li">B3</li></td>
                    <td><li class="button-li">B5</li></td>
                    <td><li class="button-li">B7</li></td>
                    <td><li class="button-li">B9</li></td>
                    <td><li class="button-li">B11</li></td>
                    <td><li class="button-li">B15</li></td>
                </tr>
            </table>
            <table class="B2">
                <tr>
                    <td><li class="button-li">B2</li></td>
                    <td><li class="button-li">B4</li></td>
                    <td><li class="button-li">B6</li></td>
                    <td><li class="button-li">B8</li></td>
                    <td><li class="button-li">B10</li></td>
                    <td><li class="button-li">B12</li></td>
                    <td><li class="button-li">B14</li></td>
                </tr>
            </table>
            <table class="B16">
                <tr>
                    <td>
                        <li class="button-li">B<br />16</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />24</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />28</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />30</li>
                    </td>
                </tr>
            </table>
            <table class="B19">
                <tr>
                    <td>
                        <li class="button-li">B<br />19</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />31</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />35</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />37</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />39</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />41</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />43</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />45</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />47</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />49</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />51</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />53</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />55</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />57</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />59</li>
                    </td>
                </tr>
            </table>
            <table class="B32">
                <tr>
                    <td>
                        <li class="button-li">B<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />34</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />38</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />40</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />42</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />44</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />46</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />48</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />50</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />52</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />54</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />56</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />58</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />60</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />62</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />64</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />66</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />68</li>
                    </td>
                </tr>
            </table>
            <table class="B61">
                <tr>
                    <td>
                        <li class="button-li">B<br />61</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />63</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />65</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />67</li>
                    </td>
                </tr>
            </table>
            <table class="B69">
                <tr>
                    <td>
                        <li class="button-li">B<br />69</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />71</li>
                    </td>
                    <td>
                        <li class="button-li">B<br />73</li>
                    </td>
                </tr>
            </table>
            <table class="C1">
                <tr>
                    <td><li class="button-li">C1</li></td>
                    <td><li class="button-li">C3</li></td>
                    <td><li class="button-li">C5</li></td>
                    <td><li class="button-li">C7</li></td>
                    <td><li class="button-li">C9</li></td>
                    <td><li class="button-li">C11</li></td>
                </tr>
            </table>
            <table class="C2">
                <tr>
                    <td><li class="button-li">C2</li></td>
                    <td><li class="button-li">C4</li></td>
                    <td><li class="button-li">C6</li></td>
                    <td><li class="button-li">C8</li></td>
                </tr>
            </table>
            <table class="C10">
                <tr>
                    <td>
                        <li class="button-li">C<br />10</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />12</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />16</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />24</li>
                    </td>
                </tr>
            </table>
            <table class="C15">
                <tr>
                    <td>
                        <li class="button-li">C<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />19</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />31</li>
                    </td>
                </tr>
            </table>
            <table class="C26">
                <tr>
                    <td>
                        <li class="button-li">C<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />28</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />30</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />34</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />38</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />40</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />42</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />44</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />46</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />48</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />50</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />52</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />54</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />56</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />58</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />60</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />62</li>
                    </td>
                </tr>
            </table>
            <table class="C33">
                <tr>
                    <td>
                        <li class="button-li">C<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />35</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />37</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />39</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />41</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />43</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />45</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />47</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />49</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />51</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />53</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />55</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />57</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />59</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />61</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />63</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />65</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />67</li>
                    </td>
                    <td>
                        <li class="button-li">C<br />69</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK D -->
            <table class="D1">
                <tr>
                    <td><li class="button-li">D1</li></td>
                    <td><li class="button-li">D3</li></td>
                </tr>
            </table>
            <table class="D2">
                <tr>
                    <td><li class="button-li">D2</li></td>
                    <td><li class="button-li">D4</li></td>
                    <td><li class="button-li">D6</li></td>
                    <td><li class="button-li">D8</li></td>
                </tr>
            </table>
            <table class="D5">
                <tr>
                    <td><li class="button-li">D5</li></td>
                    <td><li class="button-li">D7</li></td>
                    <td><li class="button-li">D9</li></td>
                    <td>
                        <li class="button-li">D<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />19</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />31</li>
                    </td>
                </tr>
            </table>
            <table class="D10">
                <tr>
                    <td><li class="button-li">D10</li></td>
                </tr>
            </table>
            <table class="D12">
                <tr>
                    <td>
                        <li class="button-li">D<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />12</li>
                    </td>
                </tr>
            </table>
            <table class="D16">
                <tr>
                    <td>
                        <li class="button-li">D<br />16</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />22</li>
                    </td>
                </tr>
            </table>
            <table class="D26">
                <tr>
                    <td>
                        <li class="button-li">D<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />24</li>
                    </td>
                </tr>
            </table>
            <table class="D30">
                <tr>
                    <td>
                        <li class="button-li">D<br />30</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />28</li>
                    </td>
                </tr>
            </table>
            <table class="D32">
                <tr>
                    <td>
                        <li class="button-li">D<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">D<br />34</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK E -->
            <table class="E1">
                <tr>
                    <td>
                        <li class="button-li">E1</li>
                    </td>
                    <td>
                        <li class="button-li">E3</li>
                    </td>
                    <td>
                        <li class="button-li">E5</li>
                    </td>
                    <td>
                        <li class="button-li">E5</li>
                    </td>
                    <td>
                        <li class="button-li">E9</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />19</li>
                    </td>
                </tr>
            </table>
            <table class="E2">
                <tr>
                    <td>
                        <li class="button-li">E2</li>
                    </td>
                    <td>
                        <li class="button-li">E4</li>
                    </td>
                    <td>
                        <li class="button-li">E6</li>
                    </td>
                    <td>
                        <li class="button-li">E8</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />10</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />12</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />16</li>
                    </td>
                </tr>
            </table>
            <table class="E18">
                <tr>
                    <td>
                        <li class="button-li">E<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />24</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />28</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />30</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />34</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />38</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />40</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />42</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />44</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />46</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />48</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />50</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />52</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />54</li>
                    </td>
                </tr>
            </table>
            <table class="E21">
                <tr>
                    <td>
                        <li class="button-li">E<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />31</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />35</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />37</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />39</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />41</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />43</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />45</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />47</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />49</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />51</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />53</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />55</li>
                    </td>
                    <td>
                        <li class="button-li">E<br />57</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK F -->
            <table class="F1">
                <tr>
                    <td>
                        <li class="button-li">F1</li>
                    </td>
                    <td>
                        <li class="button-li">F3</li>
                    </td>
                    <td>
                        <li class="button-li">F5</li>
                    </td>
                    <td>
                        <li class="button-li">F5</li>
                    </td>
                    <td>
                        <li class="button-li">F9</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />19</li>
                    </td>
                </tr>
            </table>
            <table class="F2">
                <tr>
                    <td>
                        <li class="button-li">F2</li>
                    </td>
                    <td>
                        <li class="button-li">F4</li>
                    </td>
                    <td>
                        <li class="button-li">F6</li>
                    </td>
                    <td>
                        <li class="button-li">F8</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />10</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />12</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />16</li>
                    </td>
                </tr>
            </table>
            <table class="F18">
                <tr>
                    <td>
                        <li class="button-li">F<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />24</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />28</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />30</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />34</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />38</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />40</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />42</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />44</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />46</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />48</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />50</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />52</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />54</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />56</li>
                    </td>
                </tr>
            </table>
            <table class="F21">
                <tr>
                    <td>
                        <li class="button-li">F<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />31</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />35</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />37</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />39</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />41</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />43</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />45</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />47</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />49</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />51</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />53</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />55</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />57</li>
                    </td>
                    <td>
                        <li class="button-li">F<br />59</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK G -->
            <table class="G1">
                <tr>
                    <td>
                        <li class="button-li">G1</li>
                    </td>
                    <td>
                        <li class="button-li">G3</li>
                    </td>
                    <td>
                        <li class="button-li">G5</li>
                    </td>
                    <td>
                        <li class="button-li">G5</li>
                    </td>
                    <td>
                        <li class="button-li">G9</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />19</li>
                    </td>
                </tr>
            </table>
            <table class="G2">
                <tr>
                    <td>
                        <li class="button-li">G2</li>
                    </td>
                    <td>
                        <li class="button-li">G4</li>
                    </td>
                    <td>
                        <li class="button-li">G6</li>
                    </td>
                    <td>
                        <li class="button-li">G8</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />10</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />12</li>
                    </td>
                </tr>
            </table>
            <table class="G14">
                <tr>
                    <td>
                        <li class="button-li">G<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />16</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />24</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />26</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />28</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />30</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />32</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />34</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />36</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />38</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />40</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />42</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />44</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />46</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />48</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />50</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />52</li>
                    </td>
                </tr>
            </table>
            <table class="G17">
                <tr>
                    <td>
                        <li class="button-li">G<br />17</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />19</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />31</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />35</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />37</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />39</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />41</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />43</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />45</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />47</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />49</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />51</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />53</li>
                    </td>
                    <td>
                        <li class="button-li">G<br />55</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK H -->
            <table class="H2">
                <tr>
                    <td>
                        <li class="button-li">H2</li>
                    </td>
                    <td>
                        <li class="button-li">H4</li>
                    </td>
                    <td>
                        <li class="button-li">H6</li>
                    </td>
                    <td>
                        <li class="button-li">H8</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK I -->
            <table class="I1">
                <tr>
                    <td>
                        <li class="button-li">I1</li>
                    </td>
                    <td>
                        <li class="button-li">I3</li>
                    </td>
                    <td>
                        <li class="button-li">I5</li>
                    </td>
                    <td>
                        <li class="button-li">I7</li>
                    </td>
                    <td>
                        <li class="button-li">I9</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />13</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />17</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />19</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />21</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />23</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />25</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />27</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />29</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />31</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />33</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />35</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />37</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />39</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />41</li>
                    </td>
                </tr>
            </table>
            <table class="I2">
                <tr>
                    <td>
                        <li class="button-li">I2</li>
                    </td>
                    <td>
                        <li class="button-li">I4</li>
                    </td>
                    <td>
                        <li class="button-li">I6</li>
                    </td>
                    <td>
                        <li class="button-li">I8</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />10</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />12</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />14</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />16</li>
                    </td>
                </tr>
            </table>
            <table class="I20">
                <tr>
                    <td>
                        <li class="button-li">I<br />18</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />20</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />22</li>
                    </td>
                    <td>
                        <li class="button-li">I<br />24</li>
                    </td>
                </tr>
            </table>
            <!-- BLOK J -->
            <table class="J1">
                <tr>
                    <td>
                        <li class="button-li">J1</li>
                    </td>
                    <td>
                        <li class="button-li">J3</li>
                    </td>
                    <td>
                        <li class="button-li">J5</li>
                    </td>
                    <td>
                        <li class="button-li">J7</li>
                    </td>
                    <td>
                        <li class="button-li">J9</li>
                    </td>
                    <td>
                        <li class="button-li">J<br />11</li>
                    </td>
                    <td>
                        <li class="button-li">J<br />15</li>
                    </td>
                    <td>
                        <li class="button-li">J<br />19</li>
                    </td>
                </tr>
            </table>
            <table class="J2">
                <tr>
                    <td>
                        <li class="button-li">J2</li>
                    </td>
                    <td>
                        <li class="button-li">J4</li>
                    </td>
                    <td>
                        <li class="button-li">J6</li>
                    </td>
                </tr>
            </table>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                if (typeof Storage === undefined) {
                    alert("Browser Anda tidak mendukung local storage.");
                    return false;
                }

                buttonActivity();
            });
            function buttonActivity() {
                btns = document.getElementsByClassName("button-li");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function (e) {
                        location.href="../detail/?id="+e.target.textContent;
                    });
                }
            }
        </script>
    </body>
</html>
