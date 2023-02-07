<!-- {% load static %} -->
<?php include('../assets/includes/head.php')?>

<body>
  <?php include('../assets/includes/navbar.php')?>
<!-- {% load static %}
{% block message %} -->

<div class="container">
  <div class="row ">
    <div class=" rounded col-12 my-2 text-center p-2 bg-warning"> 
      <h2>Solo Events</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/Dance-PNG.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Solo Dance</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="SOLO DANCE"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/monoact.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Monoact</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} --> 
            <input class='d-none' name="event_name" value="MONOACT"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/mehndika.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Mehndika</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="MEHNDIKA"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/charcolate.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Charcolate</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="CHARCOLATE"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/solosong.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Inidan Solo</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="INDIAN SOLO"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/openmic.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Open Mic</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="OPEN MIC"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/caligraphy.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Calligraphy</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="CALLIGRAPHY"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/bootwise-icon-02.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title text-center">Other</h5>
          <form action="{% url 'add_event_in_pid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="OTHER"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-12 rounded  text-center mt-4 p-2 bg-warning my-2"> 
      <h2>Team Events</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/groupdance.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Group Dance</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="GROUP DANCE"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/duetdance.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Duet Dance</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="DUET DANCE"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/multiscene.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Multiscene</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="MULTISCENE"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/streetplay.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Street Play</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="STREET PLAY"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/gratis.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Gratis</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="GRATIS"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/antkshari.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Situational Antakshri</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="SITUATIONAL ANTAKSHRI"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/DumbCharades.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Dumb Charades</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="DUMB CHARADES"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/rangoli.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Rangoli</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="RANGOLI"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/duetsong.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Duet Song</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="DUET SONG"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/battleofbands.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Battle of Bands</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="BATTLE OF BANDS"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/storyrecitation.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Story Recitation</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="STORY RECITATION"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
    <div class="col-md-3 mt-3">
      <div class="card text-center">
        <div class="card-header">
          <img src="images/mime.png" class="card-img-top" alt="registration image">
        </div>
        <div class="card-body mb-0">
          <h5 class="card-title">Mime</h5>
          <form action="{% url 'add_event_in_tid" method="POST" novalidate>
            <!-- {% csrf_token %} -->
            <input class='d-none' name="event_name" value="MIME"/>
            
            <button class="btn btn-color serach-btn my-2 my-sm-0" type="submit">View Participant</button>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>
<!-- footer -->
<?php include('../assets/includes/footer.php')?>