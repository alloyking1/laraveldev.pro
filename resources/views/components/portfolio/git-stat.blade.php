<!-- Prepare a container for your calendar. -->
<script
src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js">
</script>

<style>
    :root {
    --color-calendar-graph-day-bg: #dddbdb;
    --color-calendar-graph-day-L1-bg: #39dd34;
    --color-calendar-graph-day-L2-bg: #45a045;
    --color-calendar-graph-day-L3-bg: #047526;
    --color-calendar-graph-day-L4-bg: #0a4208;
    }

    .ContributionCalendar-day[data-level='0'] {
        background-color: var(--color-calendar-graph-day-bg);
    }

    .ContributionCalendar-day[data-level='1'] {
        background-color: var(--color-calendar-graph-day-L1-bg);
    }

    .ContributionCalendar-day[data-level='2'] {
        background-color: var(--color-calendar-graph-day-L2-bg);
    }

    .ContributionCalendar-day[data-level='3'] {
        background-color: var(--color-calendar-graph-day-L3-bg);
    }

    .ContributionCalendar-day[data-level='4'] {
        background-color: var(--color-calendar-graph-day-L4-bg);
    }

    table.ContributionCalendar-grid {
        margin-bottom: 0pt;
    }

    table.ContributionCalendar-grid td {
        padding: 4pt;
    }

    table.ContributionCalendar-grid td span.sr-only {
        display: none;
    }

    td.ContributionCalendar-label span[aria-hidden='true'] {
        font-size: 8pt;
        left: -1pt;
    }

    tool-tip {
        display: none;
    }

    .calendar .width-full > .float-left {
        display: none;
    }

    .calendar {
        font-family: Helvetica, arial;
        border: 1px solid #DDDDDD;
        border-radius: 3px;
        min-height: 243px;
        text-align: center;
        margin: 0 auto;
    }

    .calendar-graph text.wday,
    .calendar-graph text.month {
        font-size: 10px;
        fill: #aaa;
    }

    div.px-md-5 {
        height: 2rem;
    }

    div.float-right {
        text-align: right;
        padding: 0 14px 10px 0;
        display: inline-block;
        float: right;
    }

    div.float-right div {
        display: inline-block;
        list-style: none;
        margin: 0 5px;
        position: relative;
        bottom: -1px;
        padding: 0;
    }

    div.float-right span.sr-only {
        display: none;
    }

    .contrib-legend .legend li {
        display: inline-block;
        width: 10px;
        height: 10px;
    }

    .text-small {
        font-size: 12px;
        color: #767676;
    }

    .calendar-graph {
        padding: 5px 0 0;
        text-align: center;
    }

    .contrib-column {
        padding: 15px 0;
        text-align: center;
        border-left: 1px solid #ddd;
        border-top: 1px solid #ddd;
        font-size: 11px;
    }

    .contrib-column-first {
        border-left: 0;
    }

    .table-column {
        box-sizing: border-box;
        display: table-cell;
        width: 1%;
        padding-right: 10px;
        padding-left: 10px;
        vertical-align: top;
    }

    .contrib-number {
        font-weight: 300;
        line-height: 1.3em;
        font-size: 24px;
        display: block;
        color: #333;
    }

    .calendar img.spinner {
        width: 70px;
        margin-top: 50px;
        min-height: 70px;
    }

    .monospace {
        text-align: center;
        color: #000;
        font-family: monospace;
    }

    .monospace a {
        color: #1D75AB;
        text-decoration: none;
    }

    .contrib-footer {
        font-size: 11px;
        padding: 0 10px 12px;
        text-align: left;
        width: 100%;
        box-sizing: border-box;
        height: 26px;
    }

    .left.text-muted {
        float: left;
        margin-left: 9px;
        color: #767676;
    }
    .left.text-muted a {
        color: #4078c0;
        text-decoration: none;
    }
    .left.text-muted a:hover,
    .monospace a:hover {
        text-decoration: underline;
    }

    h2.f4.text-normal.mb-3 {
        display: none;
    }

    .float-left.text-gray {
        float: left;
    }
    #user-activity-overview{
        display:none;
    }

    .day-tooltip {
        white-space: nowrap;
        position: absolute;
        z-index: 99999;
        padding: 10px;
        font-size: 12px;
        color: #959da5;
        text-align: center;
        background: rgba(0,0,0,.85);
        border-radius: 3px;
        display: none;
        pointer-events: none;
    }
    .day-tooltip strong {
        color: #dfe2e5;
    }
    .day-tooltip.is-visible {
        display: block;
    }
    .day-tooltip:after {
        position: absolute;
        bottom: -10px;
        left: 50%;
        width: 5px;
        height: 5px;
        box-sizing: border-box;
        margin: 0 0 0 -5px;
        content: " ";
        border: 5px solid transparent;
        border-top-color: rgba(0,0,0,.85)
    }

    text.ContributionCalendar-label {
        fill: #ccc;
        font-size: 11px;
    }

    @media screen and (max-width: 768px) {
        .table-column {
            display: block;
            width: 100%;
        }
    }
</style>

@props([
    'link' => null,
])
<!-- Prepare a container for your calendar. -->
<div class="md:w-[25rem] lg:w-[25rem] xl:w-[40rem] 2xl:w-[80rem] sm:w-[37rem] w-[15rem]">
    <div class="calendar">
        <img src="{{ asset('storage/loading.gif') }}" alt="" width="10%" class="mx-atul flex justify-center">
    </div>
</div>
@php
    if(filter_var($link, FILTER_VALIDATE_URL)){
        $url = explode('/', $link);
        $username = $url['3'];
    }else{
        $username = '#';
    }
@endphp
<script>
const username = @json($username);
GitHubCalendar(".calendar", username, { responsive: true });
</script>
