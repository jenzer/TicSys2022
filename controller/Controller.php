<?php

/**
 * abstract class for all controllers 
 *
 * @author Marc Jenzer
 */
abstract class Controller {

    /**
     * Reads collection data from model 
     * and assigns values to dedicated view template
     */
    abstract protected function index();

    /**
     * Reads data of a single resource from model 
     * and assigs values to dedicated view template 
     */
    abstract protected function show();

    /**
     * creates a new empty instance of the resource 
     */
    abstract protected function init();

    /**
     * validates and stores sent user data of a newly created resource
     */
    abstract protected function create();
}

