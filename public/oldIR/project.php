<?php $current = 7; $title = "project"; include 'header.php'; ?>
        <h1>IT Project</h1>
          <h2>Application Approver Project Plan</h2>
          <ul>
            <li>
              <a href="http://broadmac.net/blog/blogs/it_blog.php">
                IT Project Blog
              </a>
            </li>
            <li>
              IT Project Plan
              <br />
              <a href="project/projectPlan.html" onClick="makerequest('project/projectPlan.html', 'targetDiv');return false;">HTML</a>
              <a href="project/projectPlan.odt">ODT</a>
              <a href="project/ProjectPlan.doc">DOC</a>
              <a href="project/ProjectPlan.pdf">PDF</a>
            </li>
            <li>
              <a href="appApprover.gif">Work Breakdown Schedule</a>
            </li>
          </ul>
          <section id="targetDiv">
            <h3>Executive Summary</h3>
            <p>
              The Florida State Department of Management Services (DMS) provides many 
              different services to the state agencies, some of which are: managing leases 
              of state facilities, human resources, and state purchasing.  Recently an audit 
              was conducted by the Auditor General's office of the Facilities area in the 
              Real Estate division.  One of the findings of the audit was that there is 
              currently no way to track and report the internal applications that employees 
              can access.  Because of this, such an application must be created and Joe Wright, 
              the Chief Information Officer of DMS' Information Technology department, 
              is the sponsor of the project.
            </p>
            <p>
              The proposed solution is to create a new application that will perform all of 
              the required tasks.  Evan Machnic, who is the intern, will be given the responsibility 
              of designing and creating the application using the Ruby on Rails framework.  
              The main assumption on this project is that the application will be completed 
              in the five weeks from 30 June 2009 to 4 August 2009.  Because of this, time is 
              also the biggest constraint.  After the period of internship, the application 
              will continue to be maintained by DMS Information Technology employees.  
              This project plan details these points and discusses others as well.
            </p>
          </section>
<?php include 'footer.php'; ?>
