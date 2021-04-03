<style>
      html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: baseline;
    }
    .body1 {
        font-size: 60%;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
    display: block;
    }
    .body1 {
    line-height: 1.5;
    }
    ol, ul {
    list-style: none;
    }
    blockquote, q {
    quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
    content: '';
    content: none;
    }
    table {
    border-spacing: 2px;
    }
    .clearfix:before,
    .clearfix:after {
        content: " "; /* 1 */
        display: table; /* 2 */
    }
    
    .clearfix:after {
        clear: both;
    }
    /**
    * For IE 6/7 only
    * Include this rule to trigger hasLayout and contain floats.
    */
    .clearfix {
        *zoom: 1;
    }
    a, a:hover {
        text-decoration: none;
    }
    .img-responsive {
        max-width: 100%;
        height: auto;
    }
    
    .body1{
        font-family: Arial, Helvetica, sans-serif;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    
    .elegant-calencar {
        width: 27em;
        height: 31em;
        border: 1px solid #c9c9c9;
        -webkit-box-shadow: 0 0 5px #c9c9c9;
        box-shadow: 0 0 5px #c9c9c9;
        text-align: center;
        margin: 4em auto;
        position: relative;
    }
    
    #header {
        font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
        height: 14em;
        background-color: #0d6efd;
        margin-bottom: 1em;
    }
    
    .pre-button, .next-button {
        margin-top: 2em;
        font-size: 3em;
        -webkit-transition: -webkit-transform 0.5s;
        transition: transform 0.5s;
        cursor: pointer;
        width: 1em;
        height: 1em;
        line-height: 1em;
        color: white;
        border-radius: 40%;
    }
    
    .pre-button:hover, .next-button:hover {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
    
    .pre-button:active,.next-button:active{
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
    }
    
    .pre-button {
        float: left;
        margin-left: 0.5em;
    }
    
    .next-button {
        float: right;
        margin-right: 1em;
    }
    
    .head-info {
        float: left;
        width: 16em;
    }
    
    .head-day {
        margin-top: 30px;
        font-size: 8em;
        line-height: 1;
        color: #fff;
    }
    
    .head-month {
        margin-top: 20px;
        font-size: 2em;
        line-height: 1;
        color: #fff;
    }
    
    #calendar {
        width: 90%;
        margin: 0 auto;
    }
    
    #calendar tr {
        height: 2em;
        line-height: 2em;
    }
    
    thead tr {
        color: #e66b6b;
    font-weight: 700;
    text-transform: uppercase;
    }
    
    tbody tr {
        color: #1171ee;
    }
    
    tbody td{
        width: 14%;
        border-radius: 50%;
        cursor: pointer;
        -webkit-transition:all 0.2s ease-in;
        transition:all 0.2s ease-in;
    }
    
    tbody td:hover, .selected {
        color: #fff;
      
        background-color: #0048ff;
        border-radius: 20%;
        border: none;
    }
    
    tbody td:active {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
    }
    
    #today {
        background-color: #e66b6b;
        color: #fff;
        font-family: serif;
        border-radius: 20%;
    }
    
    #disabled {
        cursor: default;
        background: #fff;
    }
    
    #disabled:hover {
        background: #fff;
        color: #c9c9c9;
    }
    
    #reset {
        display: block;
        position: absolute;
        right: 0.5em;
        top: 0.5em;
        z-index: 999;
        color: #fff;
        font-family: serif;
        cursor: pointer;
        padding: 0 0.5em;
        height: 1.5em;
        border: 0.1em solid #fff;
        border-radius: 4px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    
    #reset:hover {
        color: #e66b6b;
        border-color: #e66b6b;
    }
    
    #reset:active{
        -webkit-transform: scale(0.8);
        -ms-transform: scale(0.8);
        transform: scale(0.8);     
    }
    
</style>
<div class="elegant-calencar  body1" style="background: white;">
    <p id="reset">скинути</p>
    <div id="header" class="clearfix">
        <div class="pre-button">
            < </div>
                <div class="head-info" >
                    <div class="head-day"></div>
                    <div class="head-month m-1"></div>
                </div>
                <div class="next-button">></div>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>Нед</th>
                    <th>Пон</th>
                    <th>Вів</th>
                    <th>Сер</th>
                    <th>Чет</th>
                    <th>Пят</th>
                    <th>Суб</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
