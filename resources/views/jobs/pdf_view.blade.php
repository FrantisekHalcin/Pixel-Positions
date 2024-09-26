<!DOCTYPE html>
<html>
<head>
    <title>PDF Example</title>
    <style>
        .out {
            display: flex;
            justify-content: stretch;
            margin: auto;
            width: fit-content;
            gap: 20px;
            font-size: 1.6rem
        }

        .in {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<h1 style="background-color: forestgreen; padding: 20px; text-align: center; color: white" class="text-blue-50">
    {{  $job->title }}
</h1>

<div class="out">
    <div>
        <x-employer-logo :employer="$job->employer" :width="180"></x-employer-logo>
    </div>
    <div class="in">
        <div>
            Employer: <strong>{{ $job->employer->name }}</strong>
        </div>
        <div>
            Salary: <strong>{{ $job->salary }}</strong>
        </div>
        <div>
            @foreach($job->tags as $tag)
                <span style="background-color: midnightblue; color: white; padding: 3px; font-size: 14px;
                border-radius: 6px">{{
                $tag->name }}</span>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
