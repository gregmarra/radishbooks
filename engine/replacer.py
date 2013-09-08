import os

from optparse import OptionParser

BOOK_PATH = "books"
DEFAULT_REPLACEMENTS_FILE = "default_replacements.txt"

def loadText(text_filename):
    text_file = open(text_filename, 'r')
    text = text_file.read()
    return text

def loadReplacements(replace_filename, book):
    replacement_dict = dict()
    # Book defaults to "reset" things properly
    with open(os.path.join(BOOK_PATH, book, DEFAULT_REPLACEMENTS_FILE), 'r') as replace_file:
        for line in replace_file.readlines():
            splits = line.split(',')
            if len(splits) > 1:
                original = splits[0]
                replacement = splits[1]
                replacement_dict[original.strip()] = replacement.strip()
    # Individual customer customizations
    with open(replace_filename, 'r') as replace_file:
        for line in replace_file.readlines():
            splits = line.split(',')
            if len(splits) > 1:
                original = splits[0]
                replacement = splits[1]
                replacement_dict[original.strip()] = replacement.strip()
    return replacement_dict

def doReplacements(text, replacement_dict):
    for replacement in replacement_dict.keys():
        text = text.replace(replacement, replacement_dict[replacement])
    return text

def loadCleanup(cleanup_filename):
    #todo: just replace this with another loadReplacements
    replacement_dict = dict()
    replacement_dict["s's"] = "s'"
    return replacement_dict

def saveWithHeaderAndFooter(text, save_filename):
    HEADER_TEX = os.path.join(BOOK_PATH, "header.tex")
    FOOTER_TEX = os.path.join(BOOK_PATH, "footer.tex")
    
    with open(save_filename, 'w') as output_file:
        with open(HEADER_TEX, 'r') as header_file:
            output_file.write(header_file.read())
        output_file.write(text)
        with open(FOOTER_TEX, 'r') as footer_file:
            output_file.write(footer_file.read())

def main():
    
    print(os.getcwd())
    
    parser = OptionParser()
    parser.add_option("-b", "--book", type="string", default="",
                      help="book folder to load from")
    parser.add_option("-r", "--replace_file", type="string", default="",
                      help="replacement definition file")
    parser.add_option("-s", "--save_file", type="string", default="",
                      help="file to save output to")
    options, args = parser.parse_args()
    
    book_text = loadText(os.path.join(BOOK_PATH, options.book, options.book + ".tex"))
    
    new_text = doReplacements(book_text,
                              loadReplacements(options.replace_file, options.book))
    
    clean_text = doReplacements(new_text,
                                loadCleanup("placeholder"))
    
    saveWithHeaderAndFooter(clean_text, options.save_file)

    print("done.")

if __name__ == '__main__':
    main()