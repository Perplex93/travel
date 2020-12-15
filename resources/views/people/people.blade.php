@extends('layouts.app')

@section('content')
<div class="col-md-4 col-sm-5">
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
                                <div class="formgroup"><label for="date_start">Von
                                        <span class="input-group" id="date_start">
                                            <input type="text" class="form-control" value="" name="date_start">
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
                                        <span class="input-group" id="date_end"><input type="text" class="form-control" value="" name="date_end">
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
                            <div class="col-xs-6">
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
        <button type="button" class="btn btn-warning" data-search="true">
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



@endsection