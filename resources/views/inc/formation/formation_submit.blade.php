
<div class="modal fade bd-example-modal-lg show" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style=" padding-right: 15px;" aria-modal="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title h4 text-justify text-center" id="myLargeModalLabel">Demande de Formation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @include('inc.error')
                @include('inc.success')
                <form method="post" action="/submit" class="formation-form" >
                    {{ csrf_field() }}
                    <div class="form-group row"><label for="enter" class="col-form-label text-md-right">Entreprise</label>
                        <input type="text" class="form-control" name="entreprise" id="enter" placeholder="le nom d'entreprise">
                    </div>
                    <div class="form-group row"><label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="  ">
                    </div>
                    <div class="form-group row"><label for="tel">Telephone</label>
                        <input type="text" class="form-control" name="phone" id="tel" placeholder=" ">
                    </div>
                    <label for="formation">formation</label><select name="choix_formation" id="formation" class="form-control">
                        <option >Choisir Formation</option>
                        <option >medcine</option>
                        <option >top</option>
                        <option >gb</option>
                        <option >informatique</option>
                        <option >express votre besoin</option>

                    </select>
                    <div class="form-group row" id='bb'><label for="b">besoin</label>
                        <input type="text" class="form-control" name="besoinf" id="b" placeholder=" ">
                    </div>


                    <div class="form-group shadow-textarea">
                        <label for="exampleFormControlTextarea6">NOte</label>
                        <textarea name="sms" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."></textarea>
                    </div>

                    <input type="submit" id="go" value="Order Formation" class="btn btn-primary waves-effect waves-light">
                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

