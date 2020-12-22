@extends('layouts.app')

<style>
    section#headerSection {
        height: 500px;
    }

    div#headerImg {
        background-image: url('https://images.unsplash.com/photo-1522509585149-c9cd39d1ff08?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1073&q=80');
        background-position: 25% 80%;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #descriptionText{
        background-color: burlywood;
    }

    h1 {
        background-color: rgba(255, 255, 255, 0.5);
    }

    #searchButton{
        background-color: burlywood;
    }

    #userImage {
        max-width: 8rem;
        border-radius: 40%;
        border-style: groove;
    }
</style>

@section('content')
<section id="headerSection">
    <div class="h-100 d-flex justify-content-center " id="headerImg">
        <div class="col-xl-10 mt-auto mb-auto">
            <div class="text-center">
                <h1 class="display-3 font-weight-bold text-shadow">Lerne neue Leute kennen</h1>
            </div>
        </div>
    </div>
</section>

<div class="text-center pt-3 pb-3" id="descriptionText">
    <h5>Reise nicht alleine Such dir einen Travel Buddie</h5>
    <p>Viele Reise-Mitglieder suchen nach einem Reisepartner.
        Und täglich kommen neue Travel-Mates hinzu.
        Immer wieder eine neue Chance, den perfekten Reisepartner für dich zu finden.
        Wähle die Orte aus, an die du reisen möchtest,
        beschreibe kurz wie der Reisepartner sein sollte,
        den du suchst oder was du während der Reise gern tun und unternehmen würdest.
        Du erscheinst sodann auf der Liste.
        Andere Reisende können dich finden und du kannst deine Reisepläne mit ihnen besprechen.

    </p>
</div>
<div class="row m-auto">
    <div class="col-md-5 col-sm-5 mt-5 ml-5 pt-3 pb-3 ml-3 bg-white h-75">
        <h2>Suche deinen perfekten Reisepartner</h2>
        <form id="tbform" method="post" enctype="multipart/form-data">
            <div class="clear15"></div>
            <div class="formgroup dropdown-custom">
                <input type="text" id="destination" name="destination" value="" class="form-control" autocomplete="off" placeholder="Gib ein Land, eine Region oder eine Stadt ein">
                <div id="findincountry" style="display: none">
                    <div class="checkbox">
                        <label for="findallindestinationcountry">
                            <input type="checkbox" value="1" name="findallincountry" id="findallindestinationcountry">
                            <span id="findallindestinationcountrylabel"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="clear20"></div>
            <div class="panel-group" id="destinationlist" role="tablist" aria-multiselectable="true">
                <div class="panel panel-custom">
                    <div class="panel-heading panel-heading-custom" id="heading_collapse_dates" data-toggle="collapse" aria-multiselectable="false" href="#collapse_dates" aria-expanded="true" aria-controls="collapse_dates">Reisedaten (optional)</div>
                    <div id="collapse_dates" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_collapse_dates" style="height: auto;">
                        <div class="panel-body">
                            <div class="row gutter-6">
                                <div class="col-xs-6">
                                    <div class="formgroup pl-3"><label for="date_start">Von
                                            <span class="input-group" id="date_start">
                                                <input type="date" class="form-control" value="" name="date_start">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="formgroup">
                                        <label for="date_end">Bis
                                            <span class="input-group" id="date_end">
                                                <input type="date" class="form-control" value="" name="date_end">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-custom">
                    <div class="panel-heading panel-heading-custom" id="heading_collapse_" data-toggle="collapse" aria-multiselectable="false" href="#collapse_languages" aria-expanded="true" aria-controls="collapse_languages">Sprachen</div>
                    <div id="collapse_languages" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_collapse_languages">
                        <div class="panel-body">
                            <label for="languagesText"></label>
                            <div class="bootstrap-tagsinput">
                                <input type="text" placeholder=""></div>
                            <input name="languagesText" id="languagesText" class="form-control" style="display: none;">
                        </div>
                    </div>
                </div>
                <div class="panel panel-custom">
                    <div class="panel-heading panel-heading-custom collapsed" id="heading_collapse_more" data-toggle="collapse" aria-multiselectable="false" href="#collapse_more" aria-expanded="true" aria-controls="collapse_more">mehr</div>
                    <div id="collapse_more" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_collapse_more">
                        <div class="panel-body">
                            <div class="row gutter-6">
                                <div class="col-xs-6 pl-3">
                                    <label for="age_from">Alter von</label>
                                    <select name="age_from" id="age_from" class="form-control">
                                        <option value="">Jedes Alter</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option>
                                        <option>71</option>
                                        <option>72</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <label for="age_to">Alter bis</label>
                                    <select name="age_to" id="age_to" class="form-control">
                                        <option value="">Jedes Alter</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option>
                                        <option>71</option>
                                        <option>72</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clear20"></div>
                            <label for="gender_all" class="radio-inline">
                                <input type="radio" name="gender" value="" id="gender_all" checked="">Alle
                            </label>
                            <label for="gender_m" class="radio-inline">
                                <input type="radio" name="gender" value="m" id="gender_m">Männlich
                            </label>
                            <label for="gender_f" class="radio-inline">
                                <input type="radio" name="gender" value="f" id="gender_f">Weiblich
                            </label>
                            <div class="checkbox">
                                <label for="couples">
                                    <input type="checkbox" name="couples" id="couples" value="1" checked="">Paare einschließen
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn" id="searchButton" data-search="true">
                <i class="fa fa-search"></i> Suchen
            </button>
            <input type="hidden" name="Page" id="Page" value="">
            <input type="hidden" name="country" id="country" value="">
            <input type="hidden" name="geo_lat" id="geo_lat" value="">
            <input type="hidden" name="geo_lng" id="geo_lng" value="">
            <input type="hidden" name="radius" id="radius" value="100">
            <input type="hidden" name="countryName" id="countryName" value="">
        </form>
        <hr>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Trage dich in der Liste ein
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-body bg-white">
                    <p>Melde dich an, um auf dieser Liste zu erscheinen und einen Reisepartner zu finden. </p>
                    <p>Die Leute auf dieser Liste suchen einen Reisepartner, würdest du das auch gern? Du kannst andere Reisende kontaktieren und selbst kontaktiert werden.</p>
                    <p>Perfekt, wenn du die Region nicht kennst oder nicht allein unterwegs sein möchtest.</p>
                </div>
                <div class="modal-footer bg-white">
                    <a class="btn btn-success" href="../auth/login.blade.php">Melde dich hier bei uns an</a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class='col-md-6 col-sm-5 mt-5 pt-3 pb-3 ml-5 bg-white'>
        <h1>Passende Personen</h1>
        @foreach($people as $people)
        <div class="row mb-3">
            <div class="col-3 ml-3 mt-3">
                <img class="" id="userImage" src=" {{('/img/' . $people->user_image)}}" alt="">
            </div>
            <div class="col-7">
                <a href="#" target="_blank"> <strong> {{$people->name}}({{$people->age}}) </strong> </a>
                <br>
                <ul>
                    <li>
                        <div class="meetup-iconlist-icon"><i class="fa fa-calendar-o"></i></div> Reisedaten: Oct 2020 - May 2021
                    </li>
                    <li>
                        <div class="meetup-iconlist-icon"><i class="fa fa-plane"></i></div> Reiseziel:<br>
                    </li>
                    <li>
                        <div class="meetup-iconlist-icon"><i class="fa fa-info"></i></div> {{$people->description}}
                    </li>
                </ul>

                <div class="btn-margin">
                    <a href="#" target="_blank" class="btn btn-xs btn-success hidden-xs"> <i class="fa fa-eye"></i>&nbsp;Profil </a>
                    <a href="#" target="_blank" data-contact="" class="btn btn-xs btn-info"> <i class="fa fa-envelope"></i>&nbsp;Kontakt </a>
                </div>
            </div>
        
        </div>    
        <hr>
        @endforeach
    </div>
</div>


</div>

@endsection