<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8" v-if="searchResults && searchResults.length > 0">
            <h5 class="search-results-text">Search Results: <span class="total-results-text">{{ searchResults.length }} establishment(s)</span></h5>
            <div class="card result-item" v-for="result in searchResults">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img :src="thumbnailBaseUrl + result.thumbnail" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-sm">
                            <h4 class="card-title">{{ result.name }}</h4>
                            <p class="card-text">
                                <div class="row result-sub-title">
                                    <div class="col-sm-4">
                                        {{ result.location }}
                                    </div>
                                    <div class="col">
                                        {{ result.category }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Complete Address: 
                                    </div>
                                    <div class="col-sm-8">
                                        {{ result.address }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Mobile No: 
                                    </div>
                                    <div class="col-sm-8">
                                        {{ result.mobile_no }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Landline: 
                                    </div>
                                    <div class="col-sm-8">
                                        {{ result.landline }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Email:
                                    </div>
                                    <div class="col-sm-8">
                                        {{ result.email }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Contact Person
                                    </div>
                                    <div class="col-sm-8">
                                        {{ result.contact_person ? result.contact_person : 'N/A' }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Schedule:
                                    </div>
                                    <div class="col-sm-8">
                                        {{ result.schedule }}
                                    </div>
                                </div>
                            </p>
                        </div>
                    </div><!-- row card-body -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-sm-8 -->
        <div class="col-sm-8" v-if="searchResults && searchResults.length == 0">
            <h2 class="no-results-text">Ooppsss.. Establishment(s) Not Found!</h2>
        </div>
        <div class="col-sm-8" v-if="!searchResults">
            <h2 class="no-results-text">Looking for something? Start Searching!</h2>
        </div>
    </div><!-- row -->
</div><!-- container -->