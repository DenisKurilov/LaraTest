@extends('layouts.main')



@section('content')
@if( $route_current_id == 1 )
    <div class="col-md-12">
        <h2>Article one</h2>
        <p>Curabitur semper in sapien eu placerat. Aliquam tempor massa ipsum, vitae scelerisque nisi molestie ut.
            Mauris vitae hendrerit nisi. Maecenas aliquet risus id metus euismod sagittis. Sed sit amet lorem suscipit,
            malesuada mauris ac, varius mi. Phasellus tristique metus in turpis lobortis, sed lacinia enim vestibulum.
            Donec arcu metus, facilisis eu luctus in, bibendum non ligula. Nulla quis lorem sit amet mi egestas
            sollicitudin ut nec arcu. Pellentesque posuere odio nisi, in interdum quam lacinia et. Maecenas eget
            lacinia mi. Etiam diam orci, viverra ut molestie et, molestie sed mauris. Fusce iaculis turpis placerat
            urna dapibus, tincidunt iaculis lacus auctor. Nam egestas eleifend ante, dapibus condimentum nisi
            vehicula eu.</p>
    </div>
@endif
@if( $route_current_id == 2 )
    <div class="col-md-12">
        <h2>Article two</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non mattis odio, nec faucibus ante.
            Praesent ligula nisl, tincidunt non ante et, eleifend luctus magna. Sed consequat justo nec est semper
            facilisis. Phasellus feugiat mauris ut blandit rhoncus. Nullam dictum pellentesque nunc, eu dignissim
            tortor venenatis a. Pellentesque vitae ante blandit, tincidunt erat vel, ullamcorper mi. Donec non nunc
            varius, eleifend diam ut, tincidunt est. Sed finibus ante quis dui suscipit, et gravida turpis congue.
            Nulla vulputate pretium lectus quis fermentum. Aenean sed tincidunt nibh, quis porttitor lacus.
            Aliquam felis nunc, vulputate quis tristique vel, hendrerit vitae eros. Donec ut erat euismod,
            molestie nisl quis, dictum magna. Nulla sit amet ipsum felis. Mauris porta luctus ex.</p>
    </div>
@endif
@endsection


