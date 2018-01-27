<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <div class="container-fluid cover">
    

        <div class="row justify-content-center" style="padding-top: 100px">
            <div class="col-md-6">
                <h1 class="search-heading">Discover Bataan</h1>
                <label for="" class="search-filter-label">Search</label>
                <input type="text" class="form-control form-control-lg search-bar" name="" id="" placeholder="Search Establishments..">
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="search-filter-label">Location</label>
                        <select class="form-control form-control-lg">
                            <option>Balanga</option>
                        </select> 
                    </div>

                        
                    <div class="col-md-6">
                        <label for="" class="search-filter-label">Category</label>
                        <select class="form-control form-control-lg">
                            <option>Foods & Drinks</option>
                        </select>
                    </div>

                    <!-- <div class="col-md-4">
                    <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Search</button>
                    </div> -->
                </div>

                <br>

                <div class="row justify-content-center">
                    <div class="col-md-5">
                    <button type="button" name="" id="" class="btn btn-warning btn-lg btn-block search-btn" v-on:click="getUsers">Search</button>
                        <!-- <button type="button" name="" id="" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link" btn-lg btn-block"></button> -->
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>    
    </div>
