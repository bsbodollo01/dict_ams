


<!-- Modal -->
<div id="onErrorModal" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Warning</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Required field(s) cannot be nullified!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-primary">
        <span class="text-light">NEW PURCHASE REQUEST FORM</span>
    </div>
    <div class="card-body">
        <div class="container-fluid px-0 px-lg-4">
            <div class="row">
                <div class="col-12">
                    <ul id="item-list-id"class="list-group">

                        {{-- default item --}}

                        @foreach ($getItems() as $itm)

                            {{-- 

                                $itm[0] para sa stock
                                $itm[1] para sa unit
                                $itm[2] para sa description
                                $itm[3] para sa Quanity
                                $itm[4] para sa Unit cost
                                $itm[5] para sa Total cost

                            --}}

                            <li class="list-group-item rounded-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="fw-bold" role="text">Item 1</span>
                                    <button class="btn" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Remove item 1">&times;</button>
                                </div>
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <!-- stock no group -->
                                        <div class="col-12 col-sm-6">
                                            <label class="text-dark py-1"><small>Stock no*</small></label>
                                            <div  class="input-group">
                                                <input class="form-control bg-light" name="stock[]" type="number" value="{{ $itm[0] }}" placeholder="Stock no." required>
                                            </div>
                                        </div>
                                        <!-- unit group -->
                                        <div class="col-12 col-sm-6">
                                            <label class="text-dark py-1"><small>Unit*</small></label>
                                            <div class="input-group">
                                                <input class="form-control bg-light" list="default-units" name="unit[]" type="text" value="{{ $itm[1] }}" placeholder="Unit" required>
                                                <datalist id="default-units">
                                                    <option value="pcs">
                                                    <option value="in">
                                                    <option value="mm">
                                                    <option value="cm">
                                                </datalist>
                                            </div>
                                        </div>
                                        <!-- item dscription group -->
                                        <div class="col-12">
                                            <label class="text-dark py-1"><small>Item description*</small></label>
                                            <div  class="input-group">
                                                <textarea class="form-control bg-light" name="description[]" type="text" placeholder="Item description" rows="2" required style="resize: none;">{{ $itm[2] }}</textarea>
                                            </div>
                                        </div>
                                        <!-- quantity group -->
                                        <div class="col-12 col-sm-6">
                                            <label class="text-dark py-1"><small>Qty*</small></label>
                                            <div class="input-group">
                                                <input class="form-control bg-light" name="qty[]" type="number" value="{{ $itm[3] }}" placeholder="Qty" required>
                                            </div>
                                        </div>
                                        <!-- unit cost group -->
                                        <div class="col-12 col-sm-6">
                                            <label class="text-dark py-1"><small>Unit cost*</small></label>
                                            <div class="input-group">
                                                <input class="form-control bg-light" name="unitcost[]" type="number" value="{{ $itm[4] }}" placeholder="Unit cost" required>
                                            </div>
                                        </div>
                                        <!-- total cost group -->
                                        <div class="col-12">
                                            <label class="text-dark py-1"><small>Total cost</small></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa-solid fa-peso-sign"></i></span>
                                                <input class="form-control bg-light" name="totalcost[]" type="number" value="{{ $itm[5] }}" placeholder="Total cost" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <button class="pr-form__add-new-item-btn btn my-2 text-light" type="button" onclick="javascript:add__item()">
                        <i class="fa fa-plus"></i>
                        <span class="text-light" role="text">ADD NEW ITEM</span>
                    </button>
                </div>
                <!-- purpose group -->
                <div class="col-12">
                    <label for="purpose-field" class="text-dark py-1"><small>Purpose*</small></label>
                    <div  class="input-group">
                        <textarea id="purpose-field" class="form-control bg-light" name="purpose" placeholder="Purpose" rows="2" required style="resize: none;">{{ $getPurpose() }}</textarea>
                    </div>
                </div>
                <!-- requester group -->
                <div class="col-12 col-sm-6">
                    <label class="text-dark py-1"><small>Requested by*</small></label>
                    <input id="req-name" class="form-control form-control-disabled text-truncate" name="requester-name" type="text" value="{{ $getRequisitionerName() }}" placeholder="Lastname, Firstname Middle Initial" disabled>
                    <span  id="req-designation" class="form-text text-center text-truncate small">{{ $getRequisitionerDesignation() }}</span>
                </div>
                <!-- recommending approval group -->
                <div class="cil-12 col-sm-6">
                    <label class="text-dark py-1"><small>Recommending Approval*</small></label>
                    <input id="rec-approval-name" class="form-control form-control-disabled text-truncate" list="recommending-approval-list" name="requester-designation" type="text" value="{{ $getRecommendingApprovalName() }}" placeholder="Lastname, Firstname Middle Initial" required onkeyup="javascript:search__recommending_approval('{{ $getRequisitionerAccessLevelId() }}',this)">
                    <datalist id="recommending-approval-list"></datalist>
                    <span  id="rec-designation" class="form-text text-center text-truncate small">{{ $getRecommendingApprovalDesignation() }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-center justify-content-lg-between align-items-center px-0 px-lg-4">
            <button class="pr-form__generate-pr-form-btn btn btn-primary text-light" type="submit" form="validation-form" onclick="javascript:generate__pr_form()">
                <i class="fa fa-file"></i>
                <span role="text">GENERATE FORM</span>
            </button>
            <span class="text-muted" role="text">Form v0.3</span>
        </div>
    </div>
</div>

