@extends('layouts.checkout')
@section('title', 'checkout')

@section('content')

<main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Who Is Going</h1>
                            <p>
                                Trip tu Ubud, Bali, Indonesia Raya
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="frontend/images/Avatar-1.png" height="60px">
                                            </td>
                                            <td class="align-middle">
                                                sandrina Gemoy
                                            </td>
                                            <td class="align-middle">
                                                CN
                                            </td>
                                            <td class="align-middle">
                                                N/E
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="">
                                                    <img src="frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="frontend/images/Avatar-2.png" height="60px">
                                            </td>
                                            <td class="align-middle">
                                                Park So May
                                            </td>
                                            <td class="align-middle">
                                                SG
                                            </td>
                                            <td class="align-middle">
                                                30 Days
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="">
                                                    <img src="frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2> Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUserName" class="sr-only">Name</label>
                                    <input 
                                      type="text" 
                                      name="inputUserName" 
                                      class="form-control mb-2 mr-sm-2" 
                                      id="inputUserName"
                                      placeholder="UserName"
                                    />
                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="InputVisa" id="" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option> 
                                        <option value="30 Days">30 Days</option> 
                                        <option value="N/A">N/A</option> 
                                    </select>
                                    <label for="deopassport" class="sr-only">DEO Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="deopassport" placeholder="DEO Passport">
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now 
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    you are only able to invite that has registered in Nomads
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class ="trip-informations">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">
                                        2 Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional Visa</th>
                                    <td width="50%" class="text-right">
                                        $ 190,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        $80,00 / person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Subtotal</th>
                                    <td width="50%" class="text-right">
                                        $ 180,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">$ 279,</span>
                                        <span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instruction</h2>
                            <p class="payment-instructions">Please Complete your payment before  to continue the wonderful trip</p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="frontend/images//ic_bank.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0881 8829 8800
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="frontend/images//ic_bank.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0899 8501 7888
                                            <br>
                                            Bank HSBC
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{route ('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                I have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{route ('detail')}}" class="text-muted">
                                Cancel Booking 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{url ('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url ('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                uiLibrary : 'bootstrap4',
                icons : {
                    rightIcon: '<img src="{{url ('frontend/images/ic_doe.png') }}"/>'
                }
            });
        });
    </script>
@endpush