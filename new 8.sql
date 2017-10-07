CREATE TABLE Employee (
employeeid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
);

CREATE TABLE Jobs (
jobid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
jobname VARCHAR(30) NOT NULL,
jobdescription VARCHAR(250) NOT NULL,
employeeid INT DEFAULT NULL,
done BOOLEAN DEFAULT NULL
);


SELECT * FROM coisjobs.Employee;
SELECT * FROM coisjobs.Jobs;

SELECT * FROM coisjobs.Employee WHERE employeeid=?;
SELECT * FROM coisjobs.Jobs WHERE jobid=?;

SELECT * FROM coisjobs.Jobs WHERE employeeid = NULL;

SELECT * FROM coisjobs.Jobs WHERE employeeid != NULL;

INSERT INTO coisjobs.Jobs(jobname,jobdescription) VALUES(jobname,jobdescription);

INSERT INTO coisjobs.Employee(firstname,lastname,email) VALUES(?,?,?);

UPDATE coisjobs.Jobs SET employeeid = value1 WHERE jobid = ??;

UPDATE coisjobs.Jobs SET done = true WHERE jobid = ??;



CREATE DATABASE coisjobs
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

















