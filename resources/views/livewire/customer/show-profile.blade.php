<div>
    @foreach($ad as $post)
    <section id="colorProf" class="content-wrapper p-3 rounded-2 mb-4">
        <section id="introduction" class="content-header mt-2 mb-4">

            <section class="d-flex justify-content-between align-items-center">
                <h1 class="content-header-title content-header-title-small">
                   

                </h1>
                <section class="content-header-link">
                    <!--<a href="#">مشاهده همه</a>-->
                </section>
            </section>

            @auth
            @if(Auth::user()->isFollowing($post->id))
            <form wire:submit.prevent="unfollowClick({{ $post->id }})" method="POST">
                @csrf
                @method('delete')

                <button type="submit" class="btn btn-outline-danger">unfollow</button>
            </form>


            @else
            <a href="#" wire:click.prevent="followingClick({{ $post->id }})" class="btn btn-success">Follow +</a>

            @endif
            @endauth

            @guest
            <a href="#" class="btn btn-success disabled">Follow + (please Login!)</a>
            <p>please Login!</p>
            @endguest
        </section>
        <section class="product-introduction mb-4">
            <td>summary</td>
            About Me!:<br>
            {!! $post->name !!} - age:{{ $post->age }}
            <hr>
            {!! $post->about_me !!}

            {!! $post->links !!}
        </section>




        <section class="content-header-link">

            <div x-data="{ tab :  'CV' }" id="aboutTab">

                <nav class="" id="">
                    <a id="aboutTabDiv" href="#" x-on:click.prevent="tab = 'CV'" :class="{'active' : tab === 'CV'}">CV</a>
                    <a id="aboutTabDiv" href="#" x-on:click.prevent="tab = 'My social link'" :class="{'active' : tab === 'link'}">Social</a>
                    <a id="aboutTabDiv" href="#" x-on:click.prevent="tab = 'persian CV'" :class="{'active' : tab === 'persian CV'}">persian CV</a>
                </nav>

                <div x-show="tab === 'CV'" x-transition class="" id="aboutTabDiv">
                    <h4 id="h3Tab">CV</h4>
                    <p id="aboutTabP">{{$post->cv}}</p>
                </div>

                <div x-show="tab === 'My social link'" x-transition class="">
                    <h3 id="h3Tab">My social link</h3>
                    <p id="aboutTabP">{{$post->links}}</p>
                </div>
                <div x-show="tab === 'persian CV'" x-transition class="">
                    <h3 id="h3Tab">persian CV</h3>
                    <p id="aboutTabP">{{ $post->persian_cv }}</p>
                </div>

            </div>
        </section>
    </section>
    </section>

    <section class="product-features mb-4 table-responsive">
        <table class="table table-bordered border-white">






        </table>
    </section>
    </section>
    </section>
    @endforeach

</div>