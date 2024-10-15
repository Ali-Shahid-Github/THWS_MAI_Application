using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using Charity_Management_System.Models;
using Stripe;
using Stripe.Checkout;
using Microsoft.Data.SqlClient;
using System.Data;
using Newtonsoft.Json;
using Microsoft.AspNetCore.Http;

namespace Charity_Management_System.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;
        readonly SqlConnection con = new SqlConnection(SQLConnection.connectionString);
        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        public IActionResult Donation()
        {
            return View();
        }

        public IActionResult join_valunteer()
        {
            return View();
        }
        public IActionResult cases()
        {
            return View();
        }
        public IActionResult save_valunteer(string name_, string education_, string age_, string contactNo_, string gender_, string email_id_, string address_)
        {
            
            con.Open();

            string cmd= "INSERT INTO Volunteer (V_Name, V_ContactNo, V_Address, V_Age, V_Qualification, V_Gender, V_IsApproved, V_Email_Id) VALUES" +
                "       (@A, @B, @C, @D, @E, @F, @G, @H)";

            SqlCommand command = new SqlCommand(cmd, con);
            command.Parameters.AddWithValue("@A", name_);
            command.Parameters.AddWithValue("@B", contactNo_);
            command.Parameters.AddWithValue("@C", address_);
            command.Parameters.AddWithValue("@D", age_);
            command.Parameters.AddWithValue("@E", education_);
            command.Parameters.AddWithValue("@F", gender_);
            command.Parameters.AddWithValue("@G", 0);
            command.Parameters.AddWithValue("@H", email_id_);

            command.ExecuteNonQuery();

            con.Close();

            return View();
        }


        public IActionResult login()
        {
            try
            {
                var checkAdmin = JsonConvert.DeserializeObject<adminSessionInfo>(HttpContext.Session.GetString("SessionAdmin"));
                ViewData["adminName"] = checkAdmin.adminName;
                return View("~/Views/Admin/index.cshtml");
            }
            catch (Exception)
            {
                return View();
            }
        }

       
        public IActionResult needDonation()
        {
            return View();
        }
        //
        public IActionResult stripeDonation(string name, string category, string Card, string Expiry, string CVV, string Email, string Amount)
        {
            
            con.Open();

            string cmd = "INSERT INTO Donation(D_DonorName, D_Amount, D_Category, D_Card, D_ExpiryDate, D_CVV, D_Email) " +
                "VALUES(@d_donorname, @d_amount, @d_category, @d_card, @d_expirydate, @d_cvv, @d_email); SELECT SCOPE_IDENTITY();";

            SqlCommand command = new SqlCommand(cmd, con);
            command.Parameters.AddWithValue("@d_donorname", name);
            command.Parameters.AddWithValue("@d_amount", Amount);
            command.Parameters.AddWithValue("@d_category", category);
            command.Parameters.AddWithValue("@d_card", Card);
            command.Parameters.AddWithValue("@d_expirydate", Expiry);
            command.Parameters.AddWithValue("@d_cvv", CVV);
            command.Parameters.AddWithValue("@d_email", Email);


            string ReceiptID= command.ExecuteScalar().ToString();
            
            
            con.Close();

            ViewData["amount"] = Amount;
            ViewData["receiptID"] = ReceiptID;
            ViewData["name"] = name;
            ViewData["category"] = category;
            ViewData["date"] = DateTime.Now.ToString();
                
            
            return View();
        }

        public IActionResult nDonation(string name, string address, string number, string incomeSource, string category)
        {
            con.Open();

            string cmd = "INSERT INTO DonationAcceptor (DA_Name, DA_IncomeSource, DA_Category, DA_Address, DA_ContactNo, DA_Isdeserving) " +
                "VALUES (@da_name, @da_incomesource, @da_category, @da_address, @da_contactno, @da_isdeserving)";

            SqlCommand command = new SqlCommand(cmd, con);
            command.Parameters.AddWithValue("@da_name", name);
            command.Parameters.AddWithValue("@da_category", category);
            command.Parameters.AddWithValue("@da_address", address);
            command.Parameters.AddWithValue("@da_contactno", number);
            command.Parameters.AddWithValue("@da_incomesource", incomeSource);
            command.Parameters.AddWithValue("@da_isdeserving", 0);
            

            command.ExecuteNonQuery();

            con.Close();

            return View("save_valunteer");
            
        }


        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
