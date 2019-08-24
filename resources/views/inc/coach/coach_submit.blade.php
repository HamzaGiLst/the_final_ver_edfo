<div class="modal fade bd-example-modal-lg show " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-keyboard="false"  data-backdrop="static" style=" padding-right: 15px;" aria-modal="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title h4 text-justify text-center" id="myLargeModalLabel">Demande de Coaching tracking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            @include('inc.error')
            @include('inc.success')
            <div class="modal-body">
                <form action="/store" method="post">
                    {{ csrf_field() }}
                    <div class="group-control">
                        <label for="one">nom ou entreprise</label>
                        <input type="text" name="name" class="form-control" placeholder="organization">
                    </div>
                    <div class="group-control">
                        <label for="two">email</label>
                        <input type="email" name="email" class="form-control" id="two">
                    </div>
                    <div class="group-control">
                        <label for="tree">Telephone</label>
                        <input type="text" name="phone" id="tree" class="form-control">
                    </div>
                    <div class="group-control">
                        <select class="">
                            <?php  $categorie = ["top","health"]?>
                            @foreach($categorie as $c)
                                <option value="">{{$c}}</option>
                            @endforeach
                        </select>


                    </div>
                    <div class="group-control">
                        <label for="for">Description de votre besoin</label>
                        <input type="text" name="besoin" id="for" class="form-control" >
                    </div>
                    <input type="submit" value="Envoyer" class="btn badge-secondary">
                </form>
            </div>
        </div>
    </div>
</div>
