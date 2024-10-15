namespace File_Compression_Tool
{
    partial class Form3
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form3));
            this.label3 = new System.Windows.Forms.Label();
            this.DecompressButton1 = new JThinButton.JThinButton();
            this.panel3 = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.jThinButton1 = new JThinButton.JThinButton();
            this.panel1 = new System.Windows.Forms.Panel();
            this.ComBtn = new JThinButton.JThinButton();
            this.DecBtn = new JThinButton.JThinButton();
            this.backbtn = new JThinButton.JThinButton();
            this.textBox2 = new System.Windows.Forms.TextBox();
            this.progressBar1 = new System.Windows.Forms.ProgressBar();
            this.label2 = new System.Windows.Forms.Label();
            this.panel3.SuspendLayout();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // label3
            // 
            this.label3.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)));
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Times New Roman", 34F);
            this.label3.ForeColor = System.Drawing.Color.White;
            this.label3.Location = new System.Drawing.Point(150, 31);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(446, 53);
            this.label3.TabIndex = 10;
            this.label3.Text = "File Compression Tool ";
            this.label3.Click += new System.EventHandler(this.label3_Click);
            // 
            // DecompressButton1
            // 
            this.DecompressButton1.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.DecompressButton1.BackColor = System.Drawing.Color.Transparent;
            this.DecompressButton1.BackgroundColor = System.Drawing.Color.Black;
            this.DecompressButton1.BorderColor = System.Drawing.Color.White;
            this.DecompressButton1.BorderRadius = 4;
            this.DecompressButton1.ButtonText = "Decompress";
            this.DecompressButton1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.DecompressButton1.Font = new System.Drawing.Font("Microsoft YaHei UI", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.DecompressButton1.Font_Size = new System.Drawing.Font("Microsoft YaHei UI", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.DecompressButton1.ForeColors = System.Drawing.Color.White;
            this.DecompressButton1.HoverBackground = System.Drawing.Color.White;
            this.DecompressButton1.HoverBorder = System.Drawing.Color.Empty;
            this.DecompressButton1.HoverFontColor = System.Drawing.Color.Black;
            this.DecompressButton1.LineThickness = 2;
            this.DecompressButton1.Location = new System.Drawing.Point(246, 229);
            this.DecompressButton1.Margin = new System.Windows.Forms.Padding(5, 4, 5, 4);
            this.DecompressButton1.Name = "DecompressButton1";
            this.DecompressButton1.Size = new System.Drawing.Size(157, 45);
            this.DecompressButton1.TabIndex = 15;
            this.DecompressButton1.Click += new System.EventHandler(this.DecompressButton1_Click);
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.Black;
            this.panel3.Controls.Add(this.label1);
            this.panel3.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.panel3.ForeColor = System.Drawing.Color.White;
            this.panel3.Location = new System.Drawing.Point(0, 315);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(611, 34);
            this.panel3.TabIndex = 16;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Transparent;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(-3, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(420, 16);
            this.label1.TabIndex = 4;
            this.label1.Text = "Note: The file will be saved at the location of the orignal file.";
            // 
            // jThinButton1
            // 
            this.jThinButton1.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.jThinButton1.BackColor = System.Drawing.Color.Transparent;
            this.jThinButton1.BackgroundColor = System.Drawing.Color.Black;
            this.jThinButton1.BorderColor = System.Drawing.Color.White;
            this.jThinButton1.BorderRadius = 3;
            this.jThinButton1.ButtonText = "Browse";
            this.jThinButton1.Cursor = System.Windows.Forms.Cursors.Hand;
            this.jThinButton1.Font = new System.Drawing.Font("Verdana", 11.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.jThinButton1.Font_Size = new System.Drawing.Font("Verdana", 11.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.jThinButton1.ForeColors = System.Drawing.Color.White;
            this.jThinButton1.HoverBackground = System.Drawing.Color.White;
            this.jThinButton1.HoverBorder = System.Drawing.Color.Empty;
            this.jThinButton1.HoverFontColor = System.Drawing.Color.Black;
            this.jThinButton1.LineThickness = 1;
            this.jThinButton1.Location = new System.Drawing.Point(521, 134);
            this.jThinButton1.Margin = new System.Windows.Forms.Padding(4);
            this.jThinButton1.Name = "jThinButton1";
            this.jThinButton1.Size = new System.Drawing.Size(75, 26);
            this.jThinButton1.TabIndex = 12;
            this.jThinButton1.Click += new System.EventHandler(this.jThinButton1_Click);
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(43)))), ((int)(((byte)(50)))), ((int)(((byte)(56)))));
            this.panel1.Controls.Add(this.ComBtn);
            this.panel1.Controls.Add(this.DecBtn);
            this.panel1.Controls.Add(this.backbtn);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Left;
            this.panel1.Location = new System.Drawing.Point(0, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(133, 315);
            this.panel1.TabIndex = 21;
            // 
            // ComBtn
            // 
            this.ComBtn.BackColor = System.Drawing.Color.Transparent;
            this.ComBtn.BackgroundColor = System.Drawing.Color.Black;
            this.ComBtn.BorderColor = System.Drawing.Color.White;
            this.ComBtn.BorderRadius = 0;
            this.ComBtn.ButtonText = " Compress";
            this.ComBtn.Cursor = System.Windows.Forms.Cursors.Hand;
            this.ComBtn.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.ComBtn.Font_Size = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.ComBtn.ForeColors = System.Drawing.Color.White;
            this.ComBtn.HoverBackground = System.Drawing.Color.White;
            this.ComBtn.HoverBorder = System.Drawing.Color.Empty;
            this.ComBtn.HoverFontColor = System.Drawing.Color.Black;
            this.ComBtn.LineThickness = 1;
            this.ComBtn.Location = new System.Drawing.Point(0, 105);
            this.ComBtn.Margin = new System.Windows.Forms.Padding(6, 5, 6, 5);
            this.ComBtn.Name = "ComBtn";
            this.ComBtn.Size = new System.Drawing.Size(133, 49);
            this.ComBtn.TabIndex = 19;
            this.ComBtn.Click += new System.EventHandler(this.ComBtn_Click);
            // 
            // DecBtn
            // 
            this.DecBtn.BackColor = System.Drawing.Color.Transparent;
            this.DecBtn.BackgroundColor = System.Drawing.Color.Black;
            this.DecBtn.BorderColor = System.Drawing.Color.White;
            this.DecBtn.BorderRadius = 0;
            this.DecBtn.ButtonText = "Decompress";
            this.DecBtn.Cursor = System.Windows.Forms.Cursors.Hand;
            this.DecBtn.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.DecBtn.Font_Size = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.DecBtn.ForeColors = System.Drawing.Color.White;
            this.DecBtn.HoverBackground = System.Drawing.Color.White;
            this.DecBtn.HoverBorder = System.Drawing.Color.Empty;
            this.DecBtn.HoverFontColor = System.Drawing.Color.Black;
            this.DecBtn.LineThickness = 1;
            this.DecBtn.Location = new System.Drawing.Point(0, 159);
            this.DecBtn.Margin = new System.Windows.Forms.Padding(6, 5, 6, 5);
            this.DecBtn.Name = "DecBtn";
            this.DecBtn.Size = new System.Drawing.Size(133, 49);
            this.DecBtn.TabIndex = 19;
            this.DecBtn.Click += new System.EventHandler(this.DecBtn_Click);
            // 
            // backbtn
            // 
            this.backbtn.BackColor = System.Drawing.Color.Transparent;
            this.backbtn.BackgroundColor = System.Drawing.Color.Black;
            this.backbtn.BorderColor = System.Drawing.Color.White;
            this.backbtn.BorderRadius = 0;
            this.backbtn.ButtonText = "Back";
            this.backbtn.Cursor = System.Windows.Forms.Cursors.Hand;
            this.backbtn.Font = new System.Drawing.Font("Verdana", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.backbtn.Font_Size = new System.Drawing.Font("Verdana", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.backbtn.ForeColors = System.Drawing.Color.White;
            this.backbtn.HoverBackground = System.Drawing.Color.White;
            this.backbtn.HoverBorder = System.Drawing.Color.Empty;
            this.backbtn.HoverFontColor = System.Drawing.Color.Black;
            this.backbtn.LineThickness = 1;
            this.backbtn.Location = new System.Drawing.Point(0, 13);
            this.backbtn.Margin = new System.Windows.Forms.Padding(6, 4, 6, 4);
            this.backbtn.Name = "backbtn";
            this.backbtn.Size = new System.Drawing.Size(133, 29);
            this.backbtn.TabIndex = 10;
            this.backbtn.Click += new System.EventHandler(this.backbtn_Click);
            // 
            // textBox2
            // 
            this.textBox2.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)));
            this.textBox2.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(69)))), ((int)(((byte)(79)))), ((int)(((byte)(89)))));
            this.textBox2.Font = new System.Drawing.Font("Verdana", 12F);
            this.textBox2.ForeColor = System.Drawing.Color.White;
            this.textBox2.Location = new System.Drawing.Point(159, 133);
            this.textBox2.Name = "textBox2";
            this.textBox2.ReadOnly = true;
            this.textBox2.Size = new System.Drawing.Size(328, 27);
            this.textBox2.TabIndex = 23;
            this.textBox2.Text = "  Compressed File Path";
            // 
            // progressBar1
            // 
            this.progressBar1.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.progressBar1.BackColor = System.Drawing.Color.Black;
            this.progressBar1.ForeColor = System.Drawing.Color.White;
            this.progressBar1.Location = new System.Drawing.Point(159, 169);
            this.progressBar1.Name = "progressBar1";
            this.progressBar1.Size = new System.Drawing.Size(328, 23);
            this.progressBar1.TabIndex = 24;
            this.progressBar1.Click += new System.EventHandler(this.progressBar1_Click);
            // 
            // label2
            // 
            this.label2.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Times New Roman", 12F);
            this.label2.ForeColor = System.Drawing.Color.White;
            this.label2.Location = new System.Drawing.Point(518, 169);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(61, 19);
            this.label2.TabIndex = 25;
            this.label2.Text = "Working";
            // 
            // Form3
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(69)))), ((int)(((byte)(79)))), ((int)(((byte)(89)))));
            this.ClientSize = new System.Drawing.Size(611, 349);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.progressBar1);
            this.Controls.Add(this.textBox2);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.DecompressButton1);
            this.Controls.Add(this.jThinButton1);
            this.Controls.Add(this.label3);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "Form3";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "File Compression Tool - Decompression";
            this.panel3.ResumeLayout(false);
            this.panel3.PerformLayout();
            this.panel1.ResumeLayout(false);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Label label3;
        private JThinButton.JThinButton DecompressButton1;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Label label1;
        private JThinButton.JThinButton jThinButton1;
        private System.Windows.Forms.Panel panel1;
        private JThinButton.JThinButton ComBtn;
        private JThinButton.JThinButton DecBtn;
        private JThinButton.JThinButton backbtn;
        private System.Windows.Forms.TextBox textBox2;
        private System.Windows.Forms.ProgressBar progressBar1;
        private System.Windows.Forms.Label label2;
    }
}