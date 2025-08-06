#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    string enemy_1;
    string enemy_2;
    string enemy_3;
    string enemy_4;
    string enemy_5;
    string enemy_6;
    cin >> enemy_1 >> enemy_2 >> enemy_3 >> enemy_4 >> enemy_5 >> enemy_6; cin.ignore();
    for (int i = 0; i < 15; i++) {
        string suspect;
        getline(cin, suspect);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}