@extends('layout.base')

@section('title', 'Green - Dashboard')

@section('content')
    <section id="dashboard">
        <div class="wrapper">
            <div class="row">
                <div class="col-3">

                    <aside id="sidebar">
                        <section class="section customer">
                            <ul class="list">
                                <li class="item">
                                    <a href="#" class="link">Resumen</a>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <a href="#" class="link">Mis compras</a>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <a href="#" class="link">Mis productos</a>
                                </li>
                                <!-- /.item -->
                            </ul>
                            <!-- /.list -->
                        </section>
                        <!-- /.section customer -->
                    </aside>
                    <!-- /#sidebar -->


                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </div>
                <!-- /.col-3 -->
                <div class="col-9">
                    <section id="main">
                        <h1 class="section-title">Resumen</h1>
                        <!-- /.title -->
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores asperiores, non dignissimos dolore illo fuga praesentium mollitia ipsam eius, at magni adipisci ullam, voluptatibus qui. Ad quisquam magni quaerat maxime!
                        </div>
                        <!-- /.content -->
                    </section>
                    <!-- /#dashboard-content -->
                </div>
                <!-- /.col-9 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /#dashboard -->
@endsection
