@extends("default")
@section("content")
    <div class="page-head">
        <h2 class="page-head-title">Settings</h2>
        <ol class="breadcrumb">
            <li><a href="{{route("Home")}}">Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-container">
                    <ul class="nav nav-tabs">
                        <li class="active "><a href="#home" data-toggle="tab">Users Settings</a></li>
                        <li><a href="#messages" data-toggle="tab">Permissions</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane active cont">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                            <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                        </div>
                        <div id="messages" class="tab-pane">
                            <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
