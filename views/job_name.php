<html>
  <head>
    <title>Work Experience</title>
  </head>
  <body>
    <h1>Job Experience</h1>
    {% if jobs is not empty %}
      <p>Your job experience</p>

    {% for jobs in jobs %}
        </ul>
              <li>{{ job.getJobTitle }}</li>
              <li>{{ job.getJobSalary }}</li>
              <li>{{ job.getJobDuties }}</li>
        </ul>
        {% endfor %}
    {% endif %}

    <form action='/' method='post'>
        <label for='jobs'>Job</label>
        <input id='jobs' name='jobs' type='text'>
        <label for='jobs'>Job Salary</label>
        <input id='jobs' name='jobs' type='text'>
        <label for='jobs'>Job Duties</label>
        <input id='jobs' name='jobs' type='text'>
    </form>

  </body>
</html>
