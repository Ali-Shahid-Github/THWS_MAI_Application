using System;
using System.Collections.Generic;
using System.Data;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Filters;
using Microsoft.Data.SqlClient;
using Newtonsoft.Json;

namespace Charity_Management_System.Controllers
{    
    public class AdminController : Controller
    {
        readonly SqlConnection con = new SqlConnection(SQLConnection.connectionString);

        public IActionResult Index(string username = "", string Password = "")
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));

               
                ViewData["adminName"] = checkAdmin.adminName;
               
                return View("~/Views/Admin/index.cshtml");
            }
            catch (Exception)
            {

                if (username == null && Password == null)
                {
                    return View("~/Views/Home/login.cshtml");
                }

                SqlConnection con = new SqlConnection(SQLConnection.connectionString);
                con.Open();

                SqlCommand command = new SqlCommand("SELECT AN_UserName, AN_Password , AN_Name FROM Admin WHERE AN_UserName = @A AND AN_Password = @B", con);
                command.Parameters.AddWithValue("@A", username);
                command.Parameters.AddWithValue("@B", Password);


                SqlDataAdapter dataAdapter = new SqlDataAdapter(command);
                DataSet dataSet = new DataSet();
                dataAdapter.Fill(dataSet);
                con.Close();

                if (dataSet.Tables[0].Rows.Count == 1)
                {
                    string adminid = dataSet.Tables[0].Rows[0].ItemArray[0].ToString();
                    string pas = dataSet.Tables[0].Rows[0].ItemArray[1].ToString();
                    string name = dataSet.Tables[0].Rows[0].ItemArray[2].ToString();

                    if (adminid == username && pas == Password)
                    {
                        var adminSession = new adminSessionInfo();
                        adminSession.adminUserName = adminid;
                        adminSession.adminPassword = pas;
                        adminSession.adminName = name;
                        ViewData["adminName"] = name;
                        HttpContext.Session.SetString("SessionAdmin", JsonConvert.SerializeObject(adminSession));


                        return View("~/Views/Admin/index.cshtml");
                    }
                    else
                        return View("~/Views/Home/login.cshtml");
                }
                else
                    return View("~/Views/Home/login.cshtml");
            }
           
        }


        public IActionResult approve_valunteer()
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch(Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            
            
            return View();
        }
        public IActionResult logout()
        {
            HttpContext.Session.Clear();
            return View("~/Views/Home/login.cshtml");
        }

        
        public IActionResult viewCases(string _date)       
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;

                if (_date == null)
                    ViewData["Query"] = "SELECT C_Id, C_Title,CONVERT(VARCHAR(11), C_CreationDate,106), C_Amount_Require, C_Amount_collected, C_Desceiption, C_Type, V_IsCompleted FROM Cases";
                else
                    ViewData["Query"] = "SELECT C_Id, C_Title,CONVERT(VARCHAR(11), C_CreationDate,106), C_Amount_Require, C_Amount_collected, C_Desceiption, C_Type, V_IsCompleted FROM Cases WHERE C_CreationDate >= '" + _date + "';";


            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View();
        }

        public IActionResult viewDonation(string _date)
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
                if (_date == null)
                    ViewData["Query"] = "SELECT D_Id, D_DonorName, CONVERT(VARCHAR(11), D_CreationDate, 106 ), D_Amount, D_Category, D_Card," +
        "CONVERT(VARCHAR(11),  D_ExpiryDate, 106), D_CVV, D_Email FROM Donation";
                else
                    ViewData["Query"] = "SELECT D_Id, D_DonorName, CONVERT(VARCHAR(11), D_CreationDate, 106 ), D_Amount, D_Category, D_Card," +
        "CONVERT(VARCHAR(11),  D_ExpiryDate, 106), D_CVV, D_Email FROM Donation WHERE D_CreationDate >= '" + _date + "';";
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }

            
            return View();
        }

        public IActionResult viewDonee(string _date)
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
                if(_date== null)
                    ViewData["Query"] = "SELECT DonationGiven.DA_ID, DA_Name, DA_ContactNo, DA_Amount, CONVERT(VARCHAR(11), DG_Date,106) " + "FROM DonationAcceptor INNER JOIN DonationGiven " + "ON DonationGiven.DA_Id = DonationAcceptor.DA_Id;";
                else
                    ViewData["Query"] = "SELECT DonationGiven.DA_ID, DA_Name, DA_ContactNo, DA_Amount, CONVERT(VARCHAR(11), DG_Date,106) AS Dateee FROM DonationAcceptor INNER JOIN DonationGiven ON DonationGiven.DA_Id = DonationAcceptor.DA_Id WHERE DG_Date >= '" + _date + "';";

                
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View();

        }

        public IActionResult viewValunteer()
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View();
        }


        public IActionResult viewDetails()
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View();
        }




        public IActionResult del_volunteer(string id)
        {
            
            con.Open();

            SqlCommand command = new SqlCommand("DELETE FROM Volunteer WHERE V_Id = @A", con);
            command.Parameters.AddWithValue("@A", id);

            command.ExecuteNonQuery();
            con.Close();
           
            
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View("~/Views/Admin/approve_valunteer.cshtml");
        }

        public IActionResult app_volunteer(string id)
        {
            
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE Volunteer SET V_IsApproved = 1 WHERE V_Id =  @A", con);
            command.Parameters.AddWithValue("@A", id);

            if (command.ExecuteNonQuery() > 0)
                con.Close();


            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View("~/Views/Admin/approve_valunteer.cshtml");

        }

        public IActionResult DonationRequest()
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View();
        }

        public IActionResult app_done_req(string id)
        {
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE DonationAcceptor SET DA_Isdeserving = 1 WHERE DA_Id =  @A", con);
            command.Parameters.AddWithValue("@A", id);

            if (command.ExecuteNonQuery() > 0)
                con.Close();

            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View("~/Views/Admin/donationRequest.cshtml");

        }

        public IActionResult donationSave()
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }

            SqlConnection con = new SqlConnection(SQLConnection.connectionString);
            con.Open();

            SqlCommand command = new SqlCommand("SELECT SUM(C_Amount_collected), C_Type FROM Cases GROUP BY C_Type", con);

            SqlDataAdapter dataAdapter = new SqlDataAdapter(command);
            DataSet dataSet = new DataSet();
            dataAdapter.Fill(dataSet);
            con.Close();
            DataTable table = dataSet.Tables[0];

            con.Open();

            SqlCommand command2 = new SqlCommand("SELECT SUM(DA_Amount),  DA_Category FROM DonationAcceptor INNER JOIN DonationGiven ON DonationGiven.DA_Id = DonationAcceptor.DA_Id GROUP BY DonationAcceptor.DA_Category", con);

            SqlDataAdapter dataAdapter2 = new SqlDataAdapter(command2);
            DataSet dataSet2 = new DataSet();
            dataAdapter2.Fill(dataSet2);
            con.Close();
            DataTable table2 = dataSet2.Tables[0]; 
            Console.WriteLine(table.Rows[0].ItemArray[1].ToString());
            double s1 = double.Parse(table.Rows[0].ItemArray[0].ToString());
            double s2 = double.Parse(table.Rows[1].ItemArray[0].ToString());
            double s3 = double.Parse(table.Rows[2].ItemArray[0].ToString());

            double s4 = double.Parse(table2.Rows[0].ItemArray[0].ToString());
            double s5 = double.Parse(table2.Rows[1].ItemArray[0].ToString());
            double s6 = double.Parse(table2.Rows[2].ItemArray[0].ToString());

            ViewData["EducationAmount"] = Math.Abs(s1 - s4);
            ViewData["MarriageAmount"] = Math.Abs(s2 - s5);
            ViewData["OrphanAmount"] = Math.Abs(s3 - s6);
            
            
             
            return View();
        }

        public IActionResult save_done_give(string id, string _Amount)
        {
            con.Open();

            SqlCommand command = new SqlCommand("INSERT INTO DonationGiven (DA_Id, DA_Amount) VALUES (@da_id, @da_amount)", con);
            command.Parameters.AddWithValue("@da_id", id);
            command.Parameters.AddWithValue("@da_amount", _Amount);

            if (command.ExecuteNonQuery() > 0)
                con.Close();

            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View("~/Views/Admin/index.cshtml");

        }

        public IActionResult add_case (string title, string amount, string category, string description)
        {
            con.Open();

            SqlCommand command = new SqlCommand("INSERT INTO Cases (C_Title,  C_Amount_Require,  C_Desceiption, C_Type) " +
                "VALUES (@c_title, @c_amount_require,  @c_desceiption, @c_type)", con);
            command.Parameters.AddWithValue("@c_title", title);
            command.Parameters.AddWithValue("@c_amount_require", amount);
            command.Parameters.AddWithValue("@c_desceiption", description);
            command.Parameters.AddWithValue("@c_type", category);

            if (command.ExecuteNonQuery() > 0)
                con.Close();

            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View("~/Views/Admin/index.cshtml");
        }

        public IActionResult updateCase(string id)
        {
            ViewData["id"] = id;
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View();
        }

        public IActionResult upd_case(string id, string title, string amountRequire, string category, string description, string amountCollected, string isComplete)
        {
            con.Open();

            string cmd;
            if (isComplete == "Yes")
                cmd = "UPDATE Cases SET C_Title = @c_title,	C_Amount_Require = @amou_require, C_ModifiedDate =@date, C_Amount_collected = @amou_coll, C_Desceiption = @desc,	C_Type = @c_type,	V_IsCompleted = 1 WHERE C_Id = @c_id";
                
            else
                cmd = "UPDATE Cases SET C_Title = @c_title,	C_Amount_Require = @amou_require, C_ModifiedDate =@date ,C_Amount_collected = @amou_coll, C_Desceiption = @desc,	C_Type = @c_type,	V_IsCompleted = 0 WHERE C_Id = @c_id";

            SqlCommand command = new SqlCommand(cmd, con);
            command.Parameters.AddWithValue("@date", DateTime.Today.ToString().Split(' ')[0]);
            command.Parameters.AddWithValue("@c_id", id);
            command.Parameters.AddWithValue("@c_title", title);
            command.Parameters.AddWithValue("@amou_require", amountRequire);
            command.Parameters.AddWithValue("@amou_coll", amountCollected);
            command.Parameters.AddWithValue("@desc", description);
            command.Parameters.AddWithValue("@c_type", category);
            

            if (command.ExecuteNonQuery() > 0)
                con.Close();

            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
            }
            catch (Exception)
            {
                return View("~/Views/Home/login.cshtml");
            }
            return View("~/Views/Admin/index.cshtml");
            
        }
    }
}
