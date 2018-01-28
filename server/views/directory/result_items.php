<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h4 v-if="searchResults" class="search-results-text">Search Results: </h4>
            <div class="card result-item" v-for="result in searchResults">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img :src="thumbnailBaseUrl + result.thumbnail" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-sm">
                            <h4 class="card-title">{{ result.name }}</h4>
                            <p class="card-text">
                                <div class="row">
                                    <div class="col-sm-4">
                                        Address: 
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
    </div><!-- row -->
</div><!-- container -->