using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using Charity_Management_System.Models;

namespace Charity_Management_System.Data
{
    public class Charity_Management_SystemContext : DbContext
    {
        public Charity_Management_SystemContext (DbContextOptions<Charity_Management_SystemContext> options)
            : base(options)
        {
        }

        public DbSet<Charity_Management_System.Models.AdminViewModel> AdminViewModel { get; set; }
    }
}
