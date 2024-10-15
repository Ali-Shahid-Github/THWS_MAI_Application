using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace Charity_Management_System.Models
{
    public class ValunteerViewModel
    {
        [Key]
        public int V_Id { get; set; }

        [Required]
        public string V_Name { get; set; }

        [Required]
        public string V_ContactNo { get; set; }

        [Required]
        public string V_Address { get; set; }

        [Required]
        [Range(16, 35, ErrorMessage = "Age must be greater than 16 and less than 35")]
        public int V_Age { get; set; }

        [Required]
        public string V_Qualification { get; set; }

        [Required]
        public string V_Gender { get; set; }
        public int V_IsApproved { get; set; }

    }
}
