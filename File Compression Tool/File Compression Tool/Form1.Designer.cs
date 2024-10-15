namespace File_Compression_Tool
{
    partial class Form1
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.Title = new System.Windows.Forms.Label();
            this.Compressbutton = new System.Windows.Forms.Button();
            this.Decompressbutton = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // Title
            // 
            this.Title.Anchor = ((System.Windows.Forms.AnchorStyles)((System.Windows.Forms.AnchorStyles.Top | System.Windows.Forms.AnchorStyles.Bottom)));
            this.Title.AutoSize = true;
            this.Title.Font = new System.Drawing.Font("Times New Roman", 34F);
            this.Title.ForeColor = System.Drawing.Color.White;
            this.Title.Location = new System.Drawing.Point(95, 47);
            this.Title.Name = "Title";
            this.Title.Size = new System.Drawing.Size(446, 53);
            this.Title.TabIndex = 1;
            this.Title.Text = "File Compression Tool ";
            // 
            // Compressbutton
            // 
            this.Compressbutton.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.Compressbutton.BackColor = System.Drawing.Color.Black;
            this.Compressbutton.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Compressbutton.FlatAppearance.BorderColor = System.Drawing.Color.White;
            this.Compressbutton.FlatAppearance.MouseDownBackColor = System.Drawing.Color.White;
            this.Compressbutton.FlatAppearance.MouseOverBackColor = System.Drawing.Color.White;
            this.Compressbutton.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.Compressbutton.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.Compressbutton.ForeColor = System.Drawing.Color.White;
            this.Compressbutton.Location = new System.Drawing.Point(130, 162);
            this.Compressbutton.Name = "Compressbutton";
            this.Compressbutton.Size = new System.Drawing.Size(138, 45);
            this.Compressbutton.TabIndex = 2;
            this.Compressbutton.Text = "Compress";
            this.Compressbutton.UseVisualStyleBackColor = false;
            this.Compressbutton.Click += new System.EventHandler(this.Compressbutton_Click);
            // 
            // Decompressbutton
            // 
            this.Decompressbutton.Anchor = System.Windows.Forms.AnchorStyles.Top;
            this.Decompressbutton.BackColor = System.Drawing.Color.Black;
            this.Decompressbutton.Cursor = System.Windows.Forms.Cursors.Hand;
            this.Decompressbutton.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.Decompressbutton.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold);
            this.Decompressbutton.ForeColor = System.Drawing.Color.White;
            this.Decompressbutton.Location = new System.Drawing.Point(334, 162);
            this.Decompressbutton.Name = "Decompressbutton";
            this.Decompressbutton.Size = new System.Drawing.Size(138, 45);
            this.Decompressbutton.TabIndex = 2;
            this.Decompressbutton.Text = "Decompress";
            this.Decompressbutton.UseVisualStyleBackColor = false;
            this.Decompressbutton.Click += new System.EventHandler(this.Decompressbutton_Click_1);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.SlateGray;
            this.ClientSize = new System.Drawing.Size(611, 349);
            this.Controls.Add(this.Decompressbutton);
            this.Controls.Add(this.Compressbutton);
            this.Controls.Add(this.Title);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MinimumSize = new System.Drawing.Size(627, 388);
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "File Compression Tool";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Label Title;
        private System.Windows.Forms.Button Compressbutton;
        private System.Windows.Forms.Button Decompressbutton;
    }
}

