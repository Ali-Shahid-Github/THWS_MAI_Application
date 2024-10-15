using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace Charity_Management_System.Models
{
    public class AdminViewModel
    {
        [Key] public int AN_Id { get; set; }
        
        [Required] public string AN_Name { get; set; }

        [Required]
        public string AN_UserName { get; set; }

        [Required]        
        public string AN_Password { get; set; }

        [Required]
        public string AN_ContactNo { get; set; }

        [Required]
        [DataType(DataType.EmailAddress,ErrorMessage ="Please Enter the Valis Email ID")]
        public string AN_Email { get; set; }


    }
}
