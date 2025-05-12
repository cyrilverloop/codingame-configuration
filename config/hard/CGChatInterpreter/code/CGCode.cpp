#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int num_good;
    int num_bad;
    cin >> num_good >> num_bad; cin.ignore();
    for (int i = 0; i < num_good; i++) {
        string good_noun;
        cin >> good_noun; cin.ignore();
    }
    for (int i = 0; i < num_bad; i++) {
        string bad_noun;
        cin >> bad_noun; cin.ignore();
    }
    int num_lines;
    cin >> num_lines; cin.ignore();
    for (int i = 0; i < num_lines; i++) {
        string line;
        getline(cin, line);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "result" << endl;
}